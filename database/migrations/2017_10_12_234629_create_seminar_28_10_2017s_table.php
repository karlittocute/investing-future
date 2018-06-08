<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminar28102017sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_28_10_2017s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->unique();  // Id пользователя, который записался на семинар
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
        Schema::dropIfExists('seminar_28_10_2017s');
    }
}
