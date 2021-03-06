<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers',function(Blueprint $table){
            $table->increments('id');
            $table->string('off_id')->index();
            $table->string('off_name');
            $table->integer('point');
            $table->integer('network_id')->unsigned();
            $table->string('payout',10);
            $table->integer('rate');
            $table->integer('dailycap');
            $table->string('country');
            $table->string('img_link');
            $table->string('tracking');
            $table->text('des');
            $table->integer('menu_id')->unsigned();
            $table->string('rand_id',20)->unique();
            $table->boolean('incent')->default(1);
            $table->integer('click')->default(0);
            $table->integer('lead')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('network_id')->references('id')->on('network')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menu_banner')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('offers');
    }
}
