<?php

namespace App\Models;

use App\Hypershop\InvoiceDefaults;
use App\Hypershop\TransactionDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(AffiliateInvoice::class);
    }

    public function transactions()
    {
        return $this->hasMany(AffiliateTransaction::class);
    }

}
