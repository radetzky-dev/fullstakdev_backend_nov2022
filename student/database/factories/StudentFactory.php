<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->firstName();
        $lastname = fake()->lastName();
        $mail = $name.'.'.$lastname.'@'.fake()->domainName();

        echo "Stato ".fake()->state().'\n*';

        return [
            'name' => $name.' '.$lastname . '('.fake()->state().')' . '('.fake()->city().')',
            'email' => $mail,
            'phone' => "+39 34".fake()->unique()->numerify('########'),
            'password' => fake()->password(),
        ];
    }
}
