<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Socio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'lastname' => $this->faker->word,
            'dni' => $this->faker->unique()->numerify('########'),
            'direction' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'estado' => $this->faker->boolean(),
            'email' => $this->faker->unique()->email,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
