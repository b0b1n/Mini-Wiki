<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Page extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Page';
    
    protected $fillable = [
        'Titre', 'Description','Rating', 'Sommaire', 'Thématique', 'Média'
    ];
    use HasFactory;

    public function user(){

        return $this->belongsTo(Utilisateur::class);
    }

    
    public function Thematique(){

        return $this->belongsTo(Thematique::class);
    }
}
