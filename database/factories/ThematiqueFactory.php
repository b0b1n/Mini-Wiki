<?php

namespace Database\Factories;

use App\Models\Thematique;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thematique>
 */
class ThematiqueFactory extends Factory
{

    protected $model=Thematique::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NomThematique' => $this->faker->text(10),
            'Sous-thematiques'=>$this->faker->sentences(7),
            'Color'=>$this->faker->text(8)
        ];
    }
}
