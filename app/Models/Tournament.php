<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'game',
        'location',
        'type',
        'tournament_logo',
        'tournament_banner',
        'tournament_date',
    ];
}
