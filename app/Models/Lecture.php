<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'stage_id', 'info'];


    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id');
    }
}
