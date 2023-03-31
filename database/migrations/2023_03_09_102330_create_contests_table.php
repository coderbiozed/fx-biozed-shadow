<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broker_id')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('bonus')->nullable();
            $table->string('link')->nullable();
            $table->string('prize_fund')->nullable();
            $table->string('no_of_places')->nullable();
            $table->string('contest_duration')->nullable();
            $table->string('status')->nullable();
            $table->string('no_of_participants')->nullable();
            $table->string('info_link')->nullable();
            $table->tinyInteger('demo_contests')->nullable();
            $table->tinyInteger('live_contests')->nullable();
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
        Schema::dropIfExists('contests');
    }
}
