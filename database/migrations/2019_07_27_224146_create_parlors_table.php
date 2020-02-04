<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParlorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parlors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
			$table->boolean('is_popular')->nullable();
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
        Schema::dropIfExists('parlors');
    }
}
