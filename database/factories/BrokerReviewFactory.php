<?php

namespace Database\Factories;

use App\Models\BrokerReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrokerReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BrokerReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main_image' => $this->faker->word,
        'logo_image' => $this->faker->word,
        'shot_description' => $this->faker->text,
        'broker_name' => $this->faker->word,
        'title' => $this->faker->word,
        'info' => $this->faker->word,
        'visit_site' => $this->faker->word,
        'open_live' => $this->faker->word,
        'open_demo' => $this->faker->word,
        'pros' => $this->faker->text,
        'cons' => $this->faker->text,
        'introduction' => $this->faker->text,
        'min_trade' => $this->faker->word,
        'establish' => $this->faker->word,
        'address' => $this->faker->word,
        'contact' => $this->faker->word,
        'regional_ofc' => $this->faker->word,
        'prohibited_countries' => $this->faker->word,
        'max_leverage' => $this->faker->word,
        'trading_platform' => $this->faker->word,
        'web_trading' => $this->faker->word,
        'mob_trading' => $this->faker->word,
        'currencies' => $this->faker->word,
        'cryptocurrencies' => $this->faker->word,
        'cfd' => $this->faker->word,
        'min_open_live' => $this->faker->word,
        'robots' => $this->faker->word,
        'news_spike' => $this->faker->word,
        'scalping' => $this->faker->word,
        'mam' => $this->faker->word,
        'pamm' => $this->faker->word,
        'zulu_trade' => $this->faker->word,
        'deposit_method' => $this->faker->text,
        'withdrawal_method' => $this->faker->text,
        'trading_conditions' => $this->faker->text,
        'products' => $this->faker->text,
        'regulation' => $this->faker->text,
        'platforms' => $this->faker->text,
        'mobile_trading' => $this->faker->text,
        'pricing' => $this->faker->text,
        'deposit_withdrawals' => $this->faker->text,
        'customer_support' => $this->faker->text,
        'research_education' => $this->faker->text,
        'country' => $this->faker->word,
        'featured_broker' => $this->faker->word,
        'high_leverage' => $this->faker->word,
        'australian_broker' => $this->faker->word,
        'trading_platform_review' => $this->faker->word,
        'publish' => $this->faker->word,
        'top_broker' => $this->faker->randomDigitNotNull,
        'slug' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
