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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->text('demo_link')->nullable();
            $table->string('price')->nullable();
            $table->string('client')->nullable();
            $table->string('image')->nullable();
            $table->string('version')->nullable();
            $table->text('technology')->nullable();
            $table->integer('status')->default(1);
            $table->string('r_date')->nullable();
            $table->string('lu_date')->nullable();
            $table->integer('views')->default(0);
            $table->longText('meta_description')->nullable();
            $table->longText('keywords')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
};
