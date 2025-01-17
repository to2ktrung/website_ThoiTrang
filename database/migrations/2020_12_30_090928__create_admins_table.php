<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_email', 50);
            $table->string('admin_password', 50);
            $table->string('admin_name', 100);
            $table->string('admin_phone', 100);
            $table->timestamps();
        });
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\User::created([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('okemanlk'),
            'remember_token' => str_random(10)
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
}
