<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('header1');
            $table->string('subtitle1');
            $table->string('description1');
            $table->string('header2');
            $table->string('subtitle2');
            $table->string('description2');
            $table->string('header3');
            $table->string('subtitle3');
            $table->string('description3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('header1');
            $table->string('subtitle1');
            $table->string('description1');
            $table->string('header2');
            $table->string('subtitle2');
            $table->string('description2');
            $table->string('header3');
            $table->string('subtitle3');
            $table->string('description3');
        });
    }
};
