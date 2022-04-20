<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilisateur;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    protected $model= Utilisateur::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->text(),
            'email' => $this->faker->email(),
            'mot de pass' =>$this->faker->password(200),
            'estConnecté' => $this->faker->boolean(),
            'estAdmin' => $this->faker->boolean(),
            'Consultations'=>$this->faker->sentences()
            
        ];
    }
}
