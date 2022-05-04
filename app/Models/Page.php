<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Page extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Page';
    
    protected $fillable = [
        'Titre', 'Description','Rating', 'Contenu', 'Thematique', 'Media','Createur'
    ];
    use HasFactory;
}

