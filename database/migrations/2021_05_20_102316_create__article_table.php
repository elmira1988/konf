<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
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
            $table->string('bbk')->default('');//ББК
            $table->integer('language');//Язык
            $table->integer('section');//Секция
            $table->integer('form');//Форма
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
