<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourse18112017sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_18_11_2017s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->unique();  // Id пользователя, который записался на курс
			$table->tinyInteger('status')->default(0);  // Статус оплаты 1 - оплачено, 0 - не оплачено, 2 - платеж обрабатывается
			$table->unsignedInteger('payment')->default(0);  // Размер платежа 
            $table->timestamps();  // Дата создания и редактирования 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_18_11_2017s');
    }
}
