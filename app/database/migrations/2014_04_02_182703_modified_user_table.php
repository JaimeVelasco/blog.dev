<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiedUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
        {
            $table->string('username', 50);
           	$table->string('first_name', 50);
            $table->string('last_name', 50);
           
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
        {
            $table->dropCollumn('username');
           	$table->dropCollumn('first_name');
            $table->dropCollumn('last_name');
           
        });
	}

}
