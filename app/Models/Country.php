<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'world_countries';

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }
}
