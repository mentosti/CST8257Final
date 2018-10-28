<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendship', function (Blueprint $table) {
            $table->string('friend_requesterid', 16);
            $table->string('friend_requesteeid', 16);
            $table->string('status', 16);
            $table->foreign('friend_requesterid')->references('userid')->on('user')->onDelete('cascade');
            $table->foreign('friend_requesteeid')->references('userid')->on('user')->onDelete('cascade');
            $table->foreign('status')->references('status_code')->on('friendshipstatus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friendship');
    }
}
