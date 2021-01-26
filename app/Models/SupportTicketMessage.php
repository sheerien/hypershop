<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\AbstractList;

class SupportTicketMessage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class);
    }
}
