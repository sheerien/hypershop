<?php

namespace App\Models;

use App\Hypershop\OrderDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', '=', OrderDefaults::PENDING);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', '=', OrderDefaults::COMPLETED);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
