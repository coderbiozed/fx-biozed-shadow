<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_review', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broker_id');
            $table->Integer('rating');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('use_service')->nullable();
            $table->string('service_time')->nullable();
            $table->string('account_no')->nullable();
            $table->tinyInteger('accept');
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
        Schema::dropIfExists('user_review');
    }
}
