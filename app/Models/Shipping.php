<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
