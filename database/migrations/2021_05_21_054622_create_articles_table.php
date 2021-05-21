<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name_ru');//Наименование статьи
            $table->text('annot_ru');//Аннотация к статье
            $table->text('name_en');//Наименование статьи
            $table->text('annot_en');//Аннотация к статье
            $table->text('word_ru');//Ключевые слова на рус. языке
            $table->text('word_en');//Ключевые слова на англ. языке
            $table->string('udk')->default('');//УДК
            $table->string('language');//Язык
            $table->string('tex');//Файл .tex
            $table->string('pdf');//Файл .pdf

            $table->bigInteger('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');//Секция
            $table->bigInteger('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade')->onUpdate('cascade');//Форма

            $table->string('phone')->default('');//ББК
            $table->string('email')->default('');//ББК
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
