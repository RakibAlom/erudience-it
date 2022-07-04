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
        Schema::create('basic_share_hostings', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('plan_duration');
            $table->string('plan_cost');
            $table->string('plan_bonus')->nullable();
            $table->integer('s_status')->nullable();
            $table->integer('f_status')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('basic_share_hostings');
    }
};
