<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
			$table->boolean('is_popular')->nullable();
			$table->integer('popularity')->default(0);

			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')
		    	->references('id')->on('categories')
		      	->onDelete('restrict');

			$table->integer('parlor_id')->unsigned();
			$table->foreign('parlor_id')
		    	->references('id')->on('parlors')
		      	->onDelete('restrict');
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
        Schema::dropIfExists('packages');
    }
}
