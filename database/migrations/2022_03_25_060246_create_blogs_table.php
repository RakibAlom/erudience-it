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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('body');
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('image')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('keywords')->nullable();
            $table->integer('views')->default(0);
            $table->integer('status')->default(0)->comment('active = 1, deactive = 0');
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
        Schema::dropIfExists('blogs');
    }
};
