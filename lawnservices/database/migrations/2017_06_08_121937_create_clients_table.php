<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->String('firstName');
            $table->String('surname');
            $table->String('displayName');
            $table->String('streetNo');
            $table->String('street');
            $table->String('suburb');
            $table->String('postCode');
            $table->String('phone1');
            $table->String('phone2');
            $table->String('email');
            $table->String('fax');
            $table->String('active');
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
        Schema::dropIfExists('clients1s');
    }
}
