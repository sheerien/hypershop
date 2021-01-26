<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory;

    protected $table = 'world_continents';

    public function countries(){
        return $this->hasMany(Country::class);
    }
}
