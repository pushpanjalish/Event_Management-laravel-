<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventlisttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventlisttable', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->integer('ticket_price');
            $table->integer('people_no');
            $table->longText('event_des');            
            $table->string('event_pic');           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventlisttable');
    }
}
