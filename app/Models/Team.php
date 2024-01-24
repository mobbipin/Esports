<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tag', 'logo', 'description', 'stage_id'];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function matches()
    {
        return $this->hasMany(Matches::class, 'team_a_id', 'team_b_id');
    }
}