<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appliances', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('model')->nullable();
            $table->string('serie')->nullable();
            $table->integer('customer_id');
            $table->string('brand')->nullable();
            $table->text('obs')->nullable();

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
		Schema::table('appliances', function(Blueprint $table)
		{
			Schema::drop('appliances');
		});
	}

}
