<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAction extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'action_type',
        'details',
    ];

    // Disable automatic timestamps if not using updated_at
    public $timestamps = false;

    // Each admin action is performed by a user (admin)
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
