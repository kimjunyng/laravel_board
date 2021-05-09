<!doctype html>
<html lang="ko" >

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	
 	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container"><br><br><br><br>
		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  			<a class="btn btn-primary" href="/write" role="button">작성</a>
		</div><br>
		<div class="container">
			<table class="table table-striped">
  				<thead>
    				<tr>
      					<th scope="col">번호</th>
      					<th scope="col">제목</th>
      					<th scope="col">날짜</th>
    				</tr>
  				</thead>
  				<tbody>
  				@foreach($board as $board)
    				<tr>
      					<th scope="row">{{$board->b_id}}</th>
      						<td><a href="/read?board={{$board->b_id}}">{{$board->b_title}}</a></td>
      						<td>{{$board->updated_at}}</td>
    					</tr>
    			@endforeach
  				</tbody>
			</table>
		</div><br><br>
		<div>
  			<ul class="pagination justify-content-center">
  			@if($startPage > 1)
    			<li class="page-item">
      				<a class="page-link" href="/?page={{$startPage-1}}">&laquo;</a>
    			</li>
    		@endif
    		
  			@for($i = $startPage; $i < $endPage + 1; $i++)
    			@if($pageNum == $i)
    			<li class="page-item active">
      				<a class="page-link" href="/?page={{$i}}">{{$i}}</a>
    			</li>
    			@else
    			<li class="page-item">
      				<a class="page-link" href="/?page={{$i}}">{{$i}}</a>
    			</li>
    			@endif
   			@endfor
   			
   			@if($endPage < $totalPage)
    			<li class="page-item">
      				<a class="page-link" href="/?page={{$endPage+1}}">&raquo;</a>
    			</li>
    		@endif
  			</ul>
		</div>
	</body>
</html>