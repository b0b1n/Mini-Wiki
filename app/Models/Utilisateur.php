<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Utilisateur extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Utilisateur';
    
    protected $fillable = [
        'username', 'e-mail','password', 'EstConnecté', 'estAdmin', 'Date','Consultations'
    ];
    use HasFactory;
}
