<?php

use App\Models\Admin\Setting\InformationSetup;
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
        Schema::create('information_setups', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('address')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('year_experience')->nullable();
            $table->string('unique_project')->nullable();
            $table->string('total_project')->nullable();
            $table->string('happy_clients')->nullable();
            $table->string('supported_staff')->nullable();
            $table->string('service_time')->nullable();
            $table->string('certificate')->nullable();
            $table->string('daily_solution')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('quora_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('whatsapp_link')->nullable();
            $table->string('discord_link')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('short_about')->nullable();
            $table->text('copyright')->nullable();
            $table->string('logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();
        });

        InformationSetup::create([
            'title' => 'Your Website Title'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_setups');
    }
};
