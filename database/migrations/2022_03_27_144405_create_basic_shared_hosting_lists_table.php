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
        Schema::create('basic_shared_hosting_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basic_id');
            $table->foreign('basic_id')->references('id')->on('basic_share_hostings')->onDelete('cascade');
            $table->string('list');
            $table->string('sp_status')->comment('special status');
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
        Schema::dropIfExists('basic_shared_hosting_lists');
    }
};
