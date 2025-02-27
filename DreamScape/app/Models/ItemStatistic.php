<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemStatistic extends Model
{
    use HasFactory;

    // Specify the table name if it does not follow the default plural rule
    protected $table = 'item_statistics';

    protected $fillable = [
        'item_id',
        'stat_type',
        'value',
    ];

    // Each statistic belongs to an item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
