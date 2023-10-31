<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateUsersTable extends Migration
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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('identification')->unique();
            $table->string('avatar')->nullable();
            $table->string('celular');
            $table->string('password');
            $table->integer('Estado')->unsigned()->nullable()->default(12);
            $table->rememberToken();
            $table->timestamps();
        });

        $user1 = User::create([
            'name' => 'Edwin Pacheco Figueroa',
            'email' => 'pacheco2@yopmail.com',
            'email_verified_at' => '2023-10-30 22:16:24',
            'identification' => '32908123',
            'avatar' => '',
            'celular' => '310987234',
            'password' => '123456789',
            'Estado' => '12',
            'remember_token' => '',
            'created_at' => '2023-10-30 22:16:24',
            'updated_at' => '2023-10-30 22:16:24',
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
}
