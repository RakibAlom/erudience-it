<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->integer('utype')->default(1)->comment('user = 1, moderator = 2, editor = 3, admin = 5, superadmin = 99, blockuser = 0');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'username' => 'rakibalom',
            'slug' => 'rakibalom',
            'name' => 'Rakib Alom',
            'phone' => '',
            'country' => '',
            'birthdate' => '',
            'utype' => '99',
            'gender' => 'male',
            'email' => 'rakibalom17@gmail.com',
            'password' => Hash::make('Rakibalom@17;')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
