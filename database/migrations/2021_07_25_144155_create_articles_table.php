<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('tittle');
            $table->string('author')->nullable();
            $table->string('editor')->nullable();
            $table->string('resource')->nullable();
            $table->string('headline')->nullable();
            $table->string('headline_img')->nullable();
            $table->string('firstparagraph')->nullable();
            $table->string('firstparagraph_img')->nullable();
            $table->string('secondparagraph')->nullable();
            $table->string('secondparagraph_img')->nullable();
            $table->string('thirdparagraph')->nullable();
            $table->string('thirdparagraph_img')->nullable();
            $table->string('fourthparagraph')->nullable();
            $table->string('fourthparagraph_img')->nullable();
            $table->string('footline')->nullable();

            $table->timestamps();
            $table->softDeletes();
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