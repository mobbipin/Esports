<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'stage_id',
        'match_no',
        'match_name',
        'team_a_id',
        'team_b_id',
        'playing_map_name',
        'playing_map_photo',
        // ... other fields
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    // public function teamA()
    // {
    //     return $this->belongsTo(Team::class, 'team_a_id');
    // }

    // public function teamB()
    // {
    //     return $this->belongsTo(Team::class, 'team_b_id');
    // }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team_a_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team_b_id');
    }
}

