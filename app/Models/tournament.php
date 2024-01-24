<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'game_name', 'tournament_logo', 'tournament_details'];

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }
}
