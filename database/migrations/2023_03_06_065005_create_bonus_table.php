<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broker_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('bonus')->nullable();
            $table->string('link')->nullable();
            $table->string('date')->nullable();
            $table->string('available')->nullable();
            $table->string('requirement')->nullable();
            $table->string('withdrawal')->nullable();
            $table->string('others_condition')->nullable();
            $table->string('info_link')->nullable();
            $table->tinyInteger('deposit_bonus')->nullable();
            $table->tinyInteger('welcome_bonus')->nullable();
            $table->tinyInteger('publish')->nullable();
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
        Schema::dropIfExists('bonus');
    }
}
