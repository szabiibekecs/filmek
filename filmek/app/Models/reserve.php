<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reserve extends Model
{
    use HasFactory, SoftDeletes;

    protected  $fillable = [ 
        "foglalo_nev",
        "movie_id",
        "kiad",
        "visszahoz"
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }
}
