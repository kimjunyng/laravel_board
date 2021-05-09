<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    // 메모장 목록
    public function index(Request $request){
        // 현재 페이지
        $pageNum = $request->input('page');
        $pageNum = (isset($pageNum)?$pageNum:1);    // 맨 처음 접속 시 첫 페이지가 현재 페이지
        
        // 총 페이지 개수 
        $totalCount = DB::table('boards')->count('b_id');
        $totalPage = $totalCount / 10;
        
        // 해당 페이지 첫 메모 id
        $startId = ($pageNum-1)*10;
       
        $pageGroup = ceil($pageNum/5);
        // 페이지 그룹 내 첫 페이지 번호
        $startPage = (($pageGroup-1)*5)+1;
        // 페이지 그룹 내 마지막 페이지 번호
        $endPage = $startPage + 5 - 1;
        
        if($totalPage < $endPage)
            $endPage = $totalPage;
        
        $board = DB::table('boards')->orderByDesc('b_id')->skip($startId)
            ->take(10)
            ->select('b_id', 'b_title', 'updated_at')
            ->get();
        
        return view('main', ['board'=>$board, 'pageNum'=>$pageNum,
            'totalPage'=>$totalPage, 'startPage'=>$startPage, 'endPage'=>$endPage
        ]);
    }
    
    // 메모 읽기
    public function show(Request $request){
        $boardId = $request->input('board');
        // 결과가 하나일 때는 first()
        $board = DB::table('boards')->where('b_id', '=', $boardId)->first();
        
        return view('show', ['board'=>$board]);
    }
    
    // 메모 작성 페이지로 이동
    public function create() {
        return view('write');
    }
    
    // 메모 작성
    public function store(Request $request) {
        $b_title = $request->input('b_title');
        $b_content = $request->input('b_content');
        $now = now();
        
        DB::table('boards')->insertGetId([
            'b_title'=>$b_title, 'b_content'=>$b_content, 
            'created_at'=>$now, 'updated_at'=>$now]
            , 'b_id');
        
        return redirect('/');
    }
    
    // 메모 수정 페이지로 이동
    public function edit(Request $request) {
        $boardId = $request->input('board');
        
        $board = DB::table('boards')->where('b_id', '=', $boardId)->first();
        
        return view('update', ['board'=>$board]);
    }
    
    // 메모 수정
    public function update(Request $request){
        $boardId = $request->input('board');
        $boardTitle = $request->input('b_title');
        $boardContent = $request->input('b_content');
        $now = now();
        
        DB::table('boards')->where('b_id', '=', $boardId)
            ->update(['b_title'=>$boardTitle, 'b_content'=>$boardContent
                , 'updated_at'=>$now]);
        $board = DB::table('boards')->where('b_id', '=', $boardId)->first();
        
        return view('show', ['board'=>$board]);
    }
    
    // 메모 삭제
    public function delete(Request $request){
        $boardId = $request->input('board');
        
        DB::table('boards')->where('b_id', '=', $boardId)->delete();
        
        return redirect('/');
    }
}
