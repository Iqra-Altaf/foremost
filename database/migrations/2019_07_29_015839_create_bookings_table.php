<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');

			$table->date('date');
			$table->time('time');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
		    	->references('id')->on('users')
		      	->onDelete('cascade');

			$table->integer('package_id')->unsigned();
			$table->foreign('package_id')
		    	->references('id')->on('packages')
		      	->onDelete('cascade');
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
        Schema::dropIfExists('bookings');
    }
}
