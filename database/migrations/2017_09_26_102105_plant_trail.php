<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantTrail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_trail', function (Blueprint $table) {
			$table->integer('plant_id')->unsigned()->index();
			$table->foreign('plant_id')->reference('id')->on('plants')->onDelete('cascade');
			
			$table->integer('trail_id')->unsigned()->index();
			$table->foreign('trail_id')->reference('id')->on('trails')->onDelete('cascade');			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plant_trail');
    }
}
