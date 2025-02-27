<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'message',
        'read',
    ];

    // Disable default timestamps if only 'created_at' is used
    public $timestamps = false;

    // Each notification belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
