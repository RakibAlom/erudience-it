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
        Schema::create('get_quote_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('get_quote_id');
            $table->foreign('get_quote_id')->references('id')->on('get_quotes')->onDelete('cascade');
            $table->string('list')->nullable();
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
        Schema::dropIfExists('get_quote_lists');
    }
};
