<?php

namespace Database\Factories;

use App\Models\Traders;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Traders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->word,
        'trader' => $this->faker->word,
        'lifespan' => $this->faker->word,
        'trader_share' => $this->faker->word,
        'Profitability' => $this->faker->word,
        'equity' => $this->faker->word,
        'copying_traders' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
