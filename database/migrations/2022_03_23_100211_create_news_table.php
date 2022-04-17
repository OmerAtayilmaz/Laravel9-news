<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',255);
            $table->string('keywords',255)->nullable();
            $table->string('description',255)->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->nullable();
            $table->text('detail')->nullable();
            $table->string('type',255)->nullable();
            $table->integer('user_id');
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('news');
    }
}
