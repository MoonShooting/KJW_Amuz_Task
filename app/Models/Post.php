<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

    //post 저장시 필수 저장 요소
    public static $rules = [
        // 'u_id' => 'required',
        'title' => 'required',
        'content' => 'required',
    ];

    protected $table = 'posts';
    //protected $primaryKey = 'id'; //기본으로 가정함.
    $post = Post::create([
        'u_id' => 'abc',
        'b_title' => 'create 하는 방법';,
        'b_content' => '이렇게 설정하면 짜잔! 내용까지 한번에 입력 완료!',
        'b_pw' => 'abc'
    ]); 

    public $hidden = ['b_pw'];
    //사용자가 수정 가능한 값
    protected $fillable = ['b_title','t_context','b_pw'];
    //수정불가 칼럼(블랙리스트)
    protected $guarded = [
        'id',
        'u_id',
        'created_at',
        'updated_at'
    ];
}
