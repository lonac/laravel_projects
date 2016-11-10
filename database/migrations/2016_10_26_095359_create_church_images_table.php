<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('church_images', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onUpdate('cascade')->onDelete('cascade');

            $table->string('url');
            $table->text('description')->nullable();

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
        Schema::dropIfExists('church_images');
    }
}
