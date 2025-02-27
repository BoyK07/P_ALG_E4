<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'rarity',
    ];

    // An item can be stored in many inventory records
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    // An item has many statistics
    public function itemStatistics()
    {
        return $this->hasMany(ItemStatistic::class);
    }

    // An item can be exchanged in many trade items
    public function tradeItems()
    {
        return $this->hasMany(TradeItem::class);
    }

    // Many-to-many relationship with MagicalEffect via the pivot table 'item_magical_effects'
    public function magicalEffects()
    {
        return $this->belongsToMany(MagicalEffect::class, 'item_magical_effects');
    }
}
