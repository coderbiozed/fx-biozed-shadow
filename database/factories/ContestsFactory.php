<?php

namespace Database\Factories;

use App\Models\Contests;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContestsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contests::class;

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
        'prize_fund' => $this->faker->word,
        'no_of_places' => $this->faker->word,
        'contest_duration' => $this->faker->word,
        'status' => $this->faker->word,
        'no_of_participants' => $this->faker->word,
        'info_link' => $this->faker->word,
        'demo_contests' => $this->faker->word,
        'live_contests' => $this->faker->word,
        'publish' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
