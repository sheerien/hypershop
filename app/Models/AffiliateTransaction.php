<?php

namespace App\Models;

use App\Hypershop\TransactionDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }

    public function user()
    {
        return $this->hasOneThrough(User::class, Affiliate::class);
    }

    public function scopeUnpaid($query)
    {
        return $query->where('status', '=', TransactionDefaults::PENDING);
    }

    public function scopePaid($query)
    {
        return $query->where('status', '=', TransactionDefaults::PAID);
    }
}
