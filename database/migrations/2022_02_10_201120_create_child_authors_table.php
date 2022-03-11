<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic')->nullable(true);
            $table->string('work')->nullable(true);
            $table->string('adress');
            $table->string('status')->nullable(true);

            $table->bigInteger('degree_id')->nullable(true);
            $table->bigInteger('rank_id')->nullable(true);
            /*$table->bigInteger('degree_id')->unsigned();
            $table->foreign('degree_id')->references('id')->on('degree')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('rank_id')->unsigned();
            $table->foreign('rank_id')->references('id')->on('ranks')->onDelete('cascade')->onUpdate('cascade');*/

            $table->bigInteger('article_id')->unsigned();
            $table->foreign('article_id')->references('id')->on('child_articles')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('child_authors');
    }
}
