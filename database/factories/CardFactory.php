<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'holder_name'=>$this->faker->sentence,
            'number'=>rand(1,10),
            'verification_code'=>$this->faker->sentence,
            'franchise'=>$this->faker->sentence,
            'status'=>$this->faker->boolean,
        ];
    }
}
