<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'trade_id',
        'action',
        'timestamp',
    ];

    // Each history record belongs to a trade
    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }
}
