<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'dep_id'];


    public function department()
    {
        return $this->belongsTo(Deparment::class, 'dep_id');
    }
}
