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
        Schema::create('company_intros', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->text('hero_sub_title')->nullable();
            $table->string('intro_title')->nullable();
            $table->text('intro_sub_title')->nullable();
            $table->string('video_thumbnail')->nullable();
            $table->string('video_link')->nullable();
            $table->string('vlist_1')->nullable();
            $table->string('vlist_2')->nullable();
            $table->string('vlist_3')->nullable();
            $table->string('vlist_4')->nullable();
            $table->string('vlist_5')->nullable();
            $table->string('vlist_6')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_des')->nullable();
            $table->string('meta_keys')->nullable();
            $table->string('meta_img')->nullable();
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
        Schema::dropIfExists('company_intros');
    }
};
