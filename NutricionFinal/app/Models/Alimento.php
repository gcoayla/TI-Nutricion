<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $table = "alimentos";

    public function users()
    {
        return $this->belongsToMany(User::class,"usuario_consume","alimento_id","usuario_id");
    }
}
