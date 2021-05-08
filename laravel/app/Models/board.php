<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $table = 'boards';    // 테이블
    protected $fillable=['b_content'];  // 대량 할당
}
