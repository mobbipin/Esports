<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class tournament extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'title',
        'price',
        'tournament_code',
        'description'
    ];
}