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
            $table->increments('id');
            $table->string('surname'); // Фамилия
			$table->string('name'); // Имя
            $table->string('email')->unique(); // Почта
			$table->string('phone'); // Телефон
            $table->string('password'); // Пароль
			$table->tinyInteger('confirmation')->default(0);  // Подтверждение почты
			$table->tinyInteger('subscription')->default(0);  // Подписка на рассылку по почте 
            $table->rememberToken();
            $table->timestamps(); // Дата создания и редактирования 
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
