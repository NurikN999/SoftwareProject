<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    use HasFactory;
    protected $fillable = [
        'team_name',
        'amount_of_points',
        'date',
        'reason'
    ];
    public $timestamps = false;
}
