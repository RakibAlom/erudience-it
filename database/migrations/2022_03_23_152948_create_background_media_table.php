<?php

use App\Models\Admin\Setting\BackgroundMedia;
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
        Schema::create('background_media', function (Blueprint $table) {
            $table->id();
            $table->string('hero_bg_image')->nullable();
            $table->string('hero_bg_video')->nullable();
            $table->string('achievement_bg')->nullable();
            $table->string('testimonial_bg')->nullable();
            $table->string('marketplace_bg')->nullable();
            $table->string('products_bg')->nullable();
            $table->string('about_bg')->nullable();
            $table->string('blog_bg')->nullable();
            $table->string('hosting_bg')->nullable();
            $table->string('services_bg')->nullable();
            $table->string('contact_bg')->nullable();
            $table->string('user_bg')->nullable();
            $table->string('default_bg')->nullable();
            $table->string('bg_mood')->default('0')->comment('dark = 1, light = 0')->nullable();
            $table->string('editor')->nullable();
            $table->timestamps();
        });

        BackgroundMedia::create([
            'bg_mood' => '0'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('background_media');
    }
};
