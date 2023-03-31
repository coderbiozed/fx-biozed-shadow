<?php

namespace Database\Factories;

use App\Models\Compare;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompareFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compare::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broker_id' => $this->faker->word,
        'broker_name' => $this->faker->word,
        'site_link' => $this->faker->word,
        'headquarters' => $this->faker->word,
        'broker_type' => $this->faker->word,
        'founded' => $this->faker->word,
        'regulated' => $this->faker->word,
        'office_in' => $this->faker->word,
        'support_lang' => $this->faker->word,
        'account_currencies' => $this->faker->word,
        'typical_spread' => $this->faker->word,
        'eur_usd' => $this->faker->word,
        'gbp_usd' => $this->faker->word,
        'usd_jpy' => $this->faker->word,
        'min_deposit' => $this->faker->word,
        'max_leverage' => $this->faker->word,
        'min_contact' => $this->faker->word,
        'number_pairs' => $this->faker->word,
        'hedging' => $this->faker->word,
        'scalping' => $this->faker->word,
        'interest_margin' => $this->faker->word,
        'islamic_account' => $this->faker->word,
        'traders_usa' => $this->faker->word,
        'ecn_stp_account' => $this->faker->word,
        'commission_stp' => $this->faker->word,
        'platforms_offered' => $this->faker->text,
        'one_click' => $this->faker->word,
        'email_alerts' => $this->faker->word,
        'mob_alerts' => $this->faker->word,
        'server_time' => $this->faker->word,
        'demo_expiry' => $this->faker->word,
        'vps_offered' => $this->faker->word,
        'cfd' => $this->faker->word,
        'metals' => $this->faker->word,
        'oil' => $this->faker->word,
        'indices' => $this->faker->word,
        'stocks' => $this->faker->word,
        'futures' => $this->faker->word,
        'binary_options' => $this->faker->word,
        'slug' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
