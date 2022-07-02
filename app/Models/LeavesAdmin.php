<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeavesAdmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'team',
        'points',
        'date_when',
        'points_reason',
    ];
}
