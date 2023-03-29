<?php

namespace Database\Factories;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faq::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'broker_id' => $this->faker->word,
        'q_1' => $this->faker->word,
        'ans_1' => $this->faker->text,
        'q_2' => $this->faker->word,
        'ans_2' => $this->faker->text,
        'q_3' => $this->faker->word,
        'ans_3' => $this->faker->text,
        'q_4' => $this->faker->word,
        'ans_4' => $this->faker->text,
        'q_5' => $this->faker->word,
        'ans_5' => $this->faker->text,
        'q_6' => $this->faker->word,
        'ans_6' => $this->faker->text,
        'q_7' => $this->faker->word,
        'ans_7' => $this->faker->text,
        'q_8' => $this->faker->word,
        'ans_8' => $this->faker->text,
        'q_9' => $this->faker->word,
        'ans_9' => $this->faker->text,
        'q_10' => $this->faker->word,
        'ans_10' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
