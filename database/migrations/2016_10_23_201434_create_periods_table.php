<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onUpdate('cascade')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('finish_time')->nullable();
            $table->boolean('published')->default(false);

            $table->integer('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on('days')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('periods');
    }
}
