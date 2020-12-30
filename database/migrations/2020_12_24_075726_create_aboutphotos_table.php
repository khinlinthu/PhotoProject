<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutphotos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('photo');
            $table->text('description');
            $table->text('note');

            $table->unsignedBigInteger('photo_contest_id');

            $table->foreign('photo_contest_id')
                  ->references('id')
                  ->on('photo_contests')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('aboutphotos');
    }
}
