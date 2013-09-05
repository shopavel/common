<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('label');
            $table->enum('position', ['prefix', 'suffix'])
            $table->decimal('rate', 7, 2);
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
        Schema::drop('currencies');
    }

}
