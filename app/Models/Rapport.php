<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rapport extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Rapports';
    
    protected $fillable = [
        'Contenu', 'Page','Utilisateur'
    ];
    use HasFactory;
}
