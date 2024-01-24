<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'stage_name', 'stage_day', 'stage_time'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

}

