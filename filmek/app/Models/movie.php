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
        "ganre-id",
        "megjelenes"
    ];

    public function ganre()
    {
        return $this->hasOne(ganre::class);
    }
}
