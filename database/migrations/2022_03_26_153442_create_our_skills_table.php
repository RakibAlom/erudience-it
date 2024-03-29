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
        Schema::create('our_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('caption');
            $table->string('la_icon')->comment('line-awesome icons');
            $table->integer('status')->default(1);
            $table->integer('s_status')->nullable();
            $table->integer('f_status')->default(1);
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
        Schema::dropIfExists('our_skills');
    }
};
