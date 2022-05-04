<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Thematique extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Thematique';
    
    protected $fillable = [
        'NomThematique', 'SousThematiqes','Color'
    ];
    use HasFactory;
}
