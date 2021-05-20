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
            $table->text('name');//Наименование статьи
            $table->text('annot');//Аннотация к статье
            $table->text('word_ru');//Ключевые слова на рус. языке
            $table->text('word_en');//Ключевые слова на англ. языке
            $table->string('udk')->default('');//УДК
            $table->string('bbk')->default('');//ББК
            $table->integer('language');//Язык
            $table->integer('section');//Секция
            $table->integer('form');//Форма
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
        Schema::table('articles', function (Blueprint $table) {
            Schema::dropIfExists('news');
        });
    }
}
