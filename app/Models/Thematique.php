<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Thematique extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Thematiques';
    
    protected $fillable = [
        'NomThematique', 'Sous-thematiqes','Color'
    ];
    use HasFactory;
}
