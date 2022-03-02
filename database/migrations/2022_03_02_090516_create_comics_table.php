<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('short_title');
            $table->string('short_description');
            $table->string('short_img');
            $table->string('long_title');
            $table->text('long_description');
            $table->string('total_buy');
            $table->string('type_comic');
            $table->string('tag_comic');
            $table->string('author_comic');
            $table->string('price_comic');
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
        Schema::dropIfExists('comics');
    }
};
