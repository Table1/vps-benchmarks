<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('company_id')->unsigned()->index();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->string('name');
            $table->integer('api_id')->nullable();
            
            $table->decimal('cost_per_hour', 10, 2)->index();
            $table->decimal('monthly_cap', 10, 2)->index();

            $table->integer('cpu_cores')->index();
            $table->integer('memory')->index();
            $table->integer('storage')->nullable();
            $table->integer('transfer')->nullable();
            $table->integer('network_in')->nullable();
            $table->integer('network_out')->nullable();

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
        Schema::dropIfExists('plans');
    }
}
