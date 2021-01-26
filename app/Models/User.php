<?php

namespace App\Models;

use App\Hypershop\CartDefaults;
use App\Hypershop\NotificationDefaults;
use App\Hypershop\OrderDefaults;
use App\Hypershop\TicketDefaults;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carts()
    {
        // : Return all carts ACTIVE/ORDERED
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function tickets()
    {
        return $this->hasMany(SupportTicket::class);
    }

    public function wishlists()
    {
        return $this->hasMany(WishList::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function userNotifications()
    {
        return $this->hasMany(UserNotification::class);
    }

    public function likedProducts()
    {
        return $this->belongsToMany(Product::class, 'likes');
    }

    public function viewedProducts()
    {
        return $this->belongsToMany(Product::class, 'views');
    }

    public function affiliateAccount()
    {
        return $this->hasOne(Affiliate::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class);
    }

    public function productConversations(Product $product)
    {
        return $this->belongsToMany(Conversation::class)->where([
            'product_id' => $product->id
        ]);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }

}
