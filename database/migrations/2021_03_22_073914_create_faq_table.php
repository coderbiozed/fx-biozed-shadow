<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broker_id')->nullable();
            $table->string('q_1')->nullable();
            $table->longtext('ans_1')->nullable();
            $table->string('q_2')->nullable();
            $table->longtext('ans_2')->nullable();
            $table->string('q_3')->nullable();
            $table->longtext('ans_3')->nullable();
            $table->string('q_4')->nullable();
            $table->longtext('ans_4')->nullable();
            $table->string('q_5')->nullable();
            $table->longtext('ans_5')->nullable();
            $table->string('q_6')->nullable();
            $table->longtext('ans_6')->nullable();
            $table->string('q_7')->nullable();
            $table->longtext('ans_7')->nullable();
            $table->string('q_8')->nullable();
            $table->longtext('ans_8')->nullable();
            $table->string('q_9')->nullable();
            $table->longtext('ans_9')->nullable();
            $table->string('q_10')->nullable();
            $table->longtext('ans_10')->nullable();
            $table->timestamps();

            $table->foreign('broker_id')->references('id')->on('broker_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
}
