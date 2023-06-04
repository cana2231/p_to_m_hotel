<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id')->comment('会員ID');
            $table->string('name')->comment('お名前');
            $table->string('email')->unique()->comment('メールアドレス')->index();
            $table->string('phone')->comment('電話番号');
            $table->text('address')->comment('住所');
            $table->string('password')->comment('パスワード');
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
        Schema::dropIfExists('users');
    }
}
