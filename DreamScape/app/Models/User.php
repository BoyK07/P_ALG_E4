<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'display_name',
        'bio',
        'avatar_url',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // A user can have many inventory entries
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    // A user can initiate (send) many trades
    public function tradesSent()
    {
        return $this->hasMany(Trade::class, 'sender_id');
    }

    // A user can receive many trades
    public function tradesReceived()
    {
        return $this->hasMany(Trade::class, 'receiver_id');
    }

    // A user can have many notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    // A user (admin) can perform many admin actions
    public function adminActions()
    {
        return $this->hasMany(AdminAction::class, 'admin_id');
    }
}

