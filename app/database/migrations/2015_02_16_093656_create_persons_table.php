<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('report_id')->unsigned();
			$table->string('name');
			$table->integer('person_code')->unsigned();
			$table->integer('tel');
			$table->text('address');
			$table->integer('state_id')->unsigned();
			$table->integer('aid_id')->unsigned();
			$table->integer('income_id')->unsigned();
			$table->integer('insurance_id')->unsigned();
			$table->text('document');
			$table->integer('aid_amount')->unsigned();
			$table->integer('cheq_amount')->unsigned();
			$table->integer('cheq_number')->unsigned();
			$table->string('date');
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
		Schema::drop('persons');
	}

}
