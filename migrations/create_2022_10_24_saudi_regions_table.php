<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions', function (Blueprint $table) { 
			$table->id('id');
			$table->string('capitalCityId');
			$table->string('country_en');
			$table->string('country_ar');
			$table->string('nationality_en');
			$table->string('nationality_ar');
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
        Schema::dropIfExists('regions');
	}

}