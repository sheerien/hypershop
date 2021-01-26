<?php

namespace App\Models;

use App\Hypershop\MediaDefaults;
use App\Hypershop\ProductDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeAvailable($query)
    {
        return $query->where('status', '=', ProductDefaults::AVAILABLE);
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function scopeImages($query)
    {
        return $query->where('type', '=', MediaDefaults::IMAGE);
    }

    public function scopeVideos($query)
    {
        return $query->where('type', '=', MediaDefaults::VIDEO);
    }

    public function scopeDocuments($query)
    {
        return $query->where('type', '=', MediaDefaults::DOCUMENT);
    }

    public function scopeOnSale($query)
    {
        return $query->where('sale_price', '>', 0);
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function viewedUsers()
    {
        return $this->belongsToMany(User::class, 'views');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }

    public function bundles()
    {
        return $this->belongsToMany(Bundle::class);
    }

    // All conversations for the product, used in admin
    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }

    public function shippingClasses(){
        return $this->belongsToMany(Shipping::class);
    }
}
