<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxRatesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_rates', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('location_id')->nullable();
            $table->string('name')->nullable();
            $table->decimal('rate', 5, 2);
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
        Schema::drop('tax_rates');
    }

}
