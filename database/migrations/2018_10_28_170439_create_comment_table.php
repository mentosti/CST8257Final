<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->integer('comment_id', 11);
            $table->string('author_id', 16);
            $table->integer('picture_id');
            $table->string('comment_text', 3000);
            $table->timestamp('date')->useCurrent();
            $table->foreign('author_id')->references('userid')->on('user')->onDelete('cascade');
            $table->foreign('picture_id')->references('picture_id')->on('picture')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
