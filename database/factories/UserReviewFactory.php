<?php

namespace Database\Factories;

use App\Models\UserReview;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broker_id' => $this->faker->word,
        'rating' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'email' => $this->faker->word,
        'title' => $this->faker->word,
        'description' => $this->faker->text,
        'city' => $this->faker->word,
        'country' => $this->faker->word,
        'use_service' => $this->faker->randomDigitNotNull,
        'service_time' => $this->faker->word,
        'account_no' => $this->faker->word,
        'accept' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
