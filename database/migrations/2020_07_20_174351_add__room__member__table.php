<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('room_members', function (Blueprint $table) {
        //     $table->unsignedBigInteger('id_room');
        //     $table->foreign('id_room')->references('id')->on('rooms');
        //     $table->unsignedBigInteger('id_member');
        //     $table->foreign('id_member')->references('id')->on('users');
        //     $table->timestamps();
        // }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
