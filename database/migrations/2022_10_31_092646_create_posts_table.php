<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //primary key, increments메서드
            $table->integer('b_no')->index(); //글번호에 index부여
          //  $table->string('u_id','30')->uniqid; //유저id
            $table->timestamps(); //생성일시,수정일시
            $table->string('title',80); //제목
            $table->text('content'); //내용
          //  $table->string('b_pw','30'); //글pw(글 수정시 본인확인용)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
