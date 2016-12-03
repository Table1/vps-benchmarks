<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenchmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benchmarks', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('test_id')->unsigned()->index();
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            
            $table->integer('plan_id')->unsigned()->index();
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');

            $table->integer('operating_system_id')->unsigned()->index();
            $table->foreign('operating_system_id')->references('id')->on('operating_systems')->onDelete('cascade');

            $table->string('os_version')->nullable();

            $table->string('name')->index();
            $table->bigInteger('events')->index();
            $table->bigInteger('repititions')->index();
            $table->decimal('value', 10, 4)->index();

            $table->timestamp('performed')->useCurrent();

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
        Schema::dropIfExists('benchmarks');
    }
}
