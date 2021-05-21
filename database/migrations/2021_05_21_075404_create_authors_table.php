<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname_ru');
            $table->string('name_ru');
            $table->string('patronymic_ru');
            $table->string('work_ru');
            $table->string('adress_ru');
            $table->string('status_ru');

            $table->bigInteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degree')->onDelete('cascade')->onUpdate('cascade');//Секция
            $table->bigInteger('rank_id')->unsigned();
            $table->foreign('rank_id')->references('id')->on('ranks')->onDelete('cascade')->onUpdate('cascade');//Форма

            $table->bigInteger('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');//Форма


            $table->string('surname_en');
            $table->string('name_en');
            $table->string('patronymic_en');
            $table->string('work_en');
            $table->string('adress_en');
            $table->string('status_en');

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
        Schema::dropIfExists('authors');
    }
}
