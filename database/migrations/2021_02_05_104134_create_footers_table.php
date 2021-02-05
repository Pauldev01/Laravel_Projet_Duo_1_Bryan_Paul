<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string("copyright", 15);
            $table->string("resi", 10);
            $table->string("rights", 24);
            $table->string("designed", 15);
            $table->string("company", 20);
            $table->string("icone1", 20);
            $table->string("icone2", 20);
            $table->string("icone3", 20);
            $table->string("icone4", 20);
            $table->string("icone5", 20);
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
        Schema::dropIfExists('footers');
    }
}
