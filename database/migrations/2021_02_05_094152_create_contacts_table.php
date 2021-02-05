<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("title", 10);
            $table->string("paragraph");
            $table->string("iconeAddress", 20);
            $table->string("titleAddress", 20);
            $table->string("address", 50);
            $table->string("iconeMail", 20);
            $table->string("titleMail", 20);
            $table->string("mail1", 20);
            $table->string("mail2", 20);
            $table->string("iconePhone", 20);
            $table->string("titlePhone", 10);
            $table->string("number1", 20);
            $table->string("number2", 20);
            $table->string("loading", 10);
            $table->string("success", 50);
            $table->string("btnContact", 20);
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
        Schema::dropIfExists('contacts');
    }
}
