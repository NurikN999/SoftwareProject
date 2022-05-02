<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdAttendence extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'user_id',
        'overtime',
        'day',
        'punch_in',
        'punch_out',
        'punch_production',
        'punch_break',
    ];

}
