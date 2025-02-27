<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status',
    ];

    // Trade sender (initiator)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Trade receiver
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    // A trade can have many trade items
    public function tradeItems()
    {
        return $this->hasMany(TradeItem::class);
    }

    // A trade can have many trade history records
    public function tradeHistories()
    {
        return $this->hasMany(TradeHistory::class);
    }
}
