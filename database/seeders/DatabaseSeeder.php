<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Page;
use App\Models\Thematique;
use App\Models\Utilisateur;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     
    public function run()
    {
      $thematiques= Thematique::factory(4)->create();
       Utilisateur::factory(4)->create()->each(function($utilisateur) use ($thematiques){
           Page::factory(rand(1,2))->create([
               'user_id'=> $utilisateur->id,
               'thematique_id'=> $thematiques->random(1)->first()->id
           ]);
       });
    }
}
