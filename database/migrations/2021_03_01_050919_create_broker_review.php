<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrokerReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broker_review', function (Blueprint $table) {
            $table->id();
            $table->string('main_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->text('shot_description')->nullable();
            $table->string('broker_name');
            $table->string('title');
            $table->string('info')->nullable();
            $table->string('visit_site')->nullable();
            $table->string('open_live')->nullable();
            $table->string('open_demo')->nullable();
            $table->longtext('pros')->nullable();
            $table->longtext('cons')->nullable();
            $table->longtext('introduction')->nullable();
            $table->string('min_trade')->nullable();
            $table->string('establish')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('regional_ofc')->nullable();
            $table->string('prohibited_countries')->nullable();
            $table->string('max_leverage')->nullable();
            $table->string('trading_platform')->nullable();
            $table->string('web_trading')->nullable();
            $table->string('mob_trading')->nullable();
            $table->string('currencies')->nullable();
            $table->string('cryptocurrencies')->nullable();
            $table->string('cfd')->nullable();
            $table->string('min_open_live')->nullable();
            $table->string('robots')->nullable();
            $table->string('news_spike')->nullable();
            $table->string('scalping')->nullable();
            $table->string('mam')->nullable();
            $table->string('pamm')->nullable();
            $table->string('zulu_trade')->nullable();
            $table->text('deposit_method')->nullable();
            $table->text('withdrawal_method')->nullable();
            $table->longtext('trading_conditions')->nullable();
            $table->longtext('products')->nullable();
            $table->longtext('regulation')->nullable();
            $table->longtext('platforms')->nullable();
            $table->longtext('mobile_trading')->nullable();
            $table->longtext('pricing')->nullable();
            $table->longtext('deposit_withdrawals')->nullable();
            $table->longtext('customer_support')->nullable();
            $table->longtext('research_education')->nullable();
            $table->string('country')->nullable();
            $table->tinyInteger('featured_broker')->nullable();
            $table->tinyInteger('high_leverage')->nullable();
            $table->tinyInteger('asian_broker')->nullable();
            $table->tinyInteger('australian_broker')->nullable();
            $table->tinyInteger('african_broker')->nullable();
            $table->tinyInteger('canadian_broker')->nullable();
            $table->tinyInteger('europian_broker')->nullable();
            $table->tinyInteger('middle_east_broker')->nullable();
            $table->tinyInteger('us_broker')->nullable();
            $table->tinyInteger('uk_broker')->nullable();
            $table->tinyInteger('trading_platform_review')->nullable();
            $table->tinyInteger('publish')->nullable();
            $table->Integer('top_broker')->nullable();
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
        Schema::dropIfExists('broker_review');
    }
}
