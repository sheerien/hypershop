<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateInvoice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function affiliate()
    {
        return $this->belongsTo(Affiliate::class);
    }

    public function user()
    {
        $this->hasOneThrough(User::class, Affiliate::class);
    }


}
