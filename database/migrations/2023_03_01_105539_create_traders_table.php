<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('trader')->nullable();
            $table->string('lifespan')->nullable();
            $table->string('trader_share')->nullable();
            $table->string('Profitability')->nullable();
            $table->string('equity')->nullable();
            $table->string('copying_traders')->nullable();
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
        Schema::dropIfExists('traders');
    }
}
