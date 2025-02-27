<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagicalEffect extends Model
{
    use HasFactory;

    protected $fillable = [
        'effect_name',
        'effect_description',
    ];

    // Many-to-many relationship with Item using the pivot table 'item_magical_effects'
    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_magical_effects');
    }
}
