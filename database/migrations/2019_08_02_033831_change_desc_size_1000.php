<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDescSize1000 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('categories', function (Blueprint $table) {
		    $table->string('desc', 1000)->nullable()->change();
		});

		Schema::table('parlors', function (Blueprint $table) {
		    $table->string('desc', 1000)->nullable()->change();
		});

		Schema::table('galleries', function (Blueprint $table) {
		    $table->string('desc', 1000)->nullable()->change();
		});

		Schema::table('packages', function (Blueprint $table) {
		    $table->string('desc', 1000)->nullable()->change();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
