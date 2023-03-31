<?php

namespace Database\Factories;

use App\Models\Bonus;
use Illuminate\Database\Eloquent\Factories\Factory;

class BonusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bonus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broker_id' => $this->faker->word,
        'title' => $this->faker->word,
        'description' => $this->faker->word,
        'bonus' => $this->faker->word,
        'link' => $this->faker->word,
        'date' => $this->faker->word,
        'available' => $this->faker->word,
        'requirement' => $this->faker->word,
        'withdrawal' => $this->faker->word,
        'others_condition' => $this->faker->word,
        'info_link' => $this->faker->word,
        'deposit_bonus' => $this->faker->word,
        'welcome_bonus' => $this->faker->word,
        'publish' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
