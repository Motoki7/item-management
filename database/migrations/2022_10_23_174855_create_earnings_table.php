<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('month1')->default('0');
            $table->integer('month2')->default('0');
            $table->integer('month3')->default('0');
            $table->integer('month4')->default('0');
            $table->integer('month5')->default('0');
            $table->integer('month6')->default('0');
            $table->integer('month7')->default('0');
            $table->integer('month8')->default('0');
            $table->integer('month9')->default('0');
            $table->integer('month10')->default('0');
            $table->integer('month11')->default('0');
            $table->integer('month12')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earnings');
    }
}
