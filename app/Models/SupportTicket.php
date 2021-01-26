<?php

namespace App\Models;

use App\Hypershop\TicketDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeOpen($query)
    {
        return $query->where('status', '=', TicketDefaults::OPEN);
    }

    public function scopeClosed($query)
    {
        return $query->where('status', '=', TicketDefaults::CLOSED);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
