<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'trade_id',
        'item_id',
        'quantity',
    ];

    // Each trade item belongs to a trade
    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }

    // Each trade item is associated with an item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
