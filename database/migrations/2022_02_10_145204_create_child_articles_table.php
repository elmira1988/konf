<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');//Наименование статьи
            $table->string('files');//Материалы доклада
            $table->text('node');//Комментарий

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
        Schema::dropIfExists('child_articles');
    }
}
