<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('broker_id');
            $table->string('broker_name');
            $table->string('site_link')->nullable();
            $table->string('headquarters')->nullable();
            $table->string('broker_type')->nullable();
            $table->string('founded')->nullable();
            $table->string('regulated')->nullable();
            $table->string('office_in')->nullable();
            $table->string('support_lang')->nullable();
            $table->string('account_currencies')->nullable();
            $table->string('typical_spread')->nullable();
            $table->string('eur_usd')->nullable();
            $table->string('gbp_usd')->nullable();
            $table->string('usd_jpy')->nullable();
            $table->string('min_deposit')->nullable();
            $table->string('max_leverage')->nullable();
            $table->string('min_contact')->nullable();
            $table->string('number_pairs')->nullable();
            $table->tinyInteger('hedging')->nullable();
            $table->tinyInteger('scalping')->nullable();
            $table->tinyInteger('interest_margin')->nullable();
            $table->tinyInteger('islamic_account')->nullable();
            $table->tinyInteger('traders_usa')->nullable();
            $table->tinyInteger('ecn_stp_account')->nullable();
            $table->string('commission_stp')->nullable();
            $table->text('platforms_offered')->nullable();
            $table->tinyInteger('one_click')->nullable();
            $table->tinyInteger('email_alerts')->nullable();
            $table->tinyInteger('mob_alerts')->nullable();
            $table->string('server_time')->nullable();
            $table->string('demo_expiry')->nullable();
            $table->tinyInteger('vps_offered')->nullable();
            $table->tinyInteger('cfd')->nullable();
            $table->tinyInteger('metals')->nullable();
            $table->tinyInteger('oil')->nullable();
            $table->tinyInteger('indices')->nullable();
            $table->tinyInteger('stocks')->nullable();
            $table->tinyInteger('futures')->nullable();
            $table->tinyInteger('binary_options')->nullable();
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
        Schema::dropIfExists('compare');
    }
}
