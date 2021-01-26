<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateTransactionLine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transaction()
    {
        return $this->belongsTo(AffiliateTransaction::class);
    }

    public function invoice()
    {
        return $this->belongsTo(AffiliateInvoice::class);
    }
}
