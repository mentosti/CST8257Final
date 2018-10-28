<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function (Blueprint $table) {
            $table->integer('album_id', 11)->autoIncrements();
            $table->string('title');
            $table->string('description', 3000)->nullable();
            $table->date('date_updated');
            $table->string('owner_id', 16);
            $table->string('accessibility_code', 16);
            $table->foreign('owner_id')->references('userid')->on('user')->onDelete('cascade');
            $table->foreign('accessibility_code')->references('accessibility_code')->on('accessibility')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
}
