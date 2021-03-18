<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Dr. " . $this->faker->name,
            'bio' => $this->faker->realText(300),
            'avatar' => $this->faker->imageUrl(),
            'department_id' => $this->faker->numberBetween(1, 4),
            'email' => $this->faker->email,
        ];
    }
}
