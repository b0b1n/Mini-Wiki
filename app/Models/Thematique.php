<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Page;

class Thematique extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Thematique';
    
    protected $fillable = [
        'NomThematique', 'Sous-thematiqes','Color'
    ];
    use HasFactory;
public function pages(){

    return $this->hasMany(Page::class);
}
}
