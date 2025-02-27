<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'quantity',
    ];

    // Each inventory record belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each inventory record belongs to an item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
