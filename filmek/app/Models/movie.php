<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class movie extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "cim",
        "rendezo",
        "ganre_id",
        "megjelenes"
    ];

    public function ganre()
    {
        return $this->belongsTo(Ganre::class);
    }

    public function reserve(){
        return $this->hasMany(Reserve::class);
    }
}

