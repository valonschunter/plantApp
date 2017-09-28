<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
	
	public function trails()
	{
		return $this->belongsToMany('App\Trail');
	}
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sciName');
            $table->string('comName');
            $table->integer('tepals')->nullable;
            $table->integer('petBase')->nullable;
            $table->string('petalColor')->nullable;
            $table->integer('stamen')->nullable;
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
        Schema::dropIfExists('plants');
    }
}
