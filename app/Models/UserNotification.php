<?php

namespace App\Models;

use App\Hypershop\NotificationDefaults;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUnread($query)
    {
        return $query->where('status', '=', NotificationDefaults::UNREAD);
    }

    public function scopeRead($query)
    {
        return $query->where('status', '=', NotificationDefaults::READ);
    }
}
