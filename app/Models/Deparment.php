<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deparment extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'college_id'];


    public function college()
    {
        return $this->belongsTo(College_Inist::class, 'college_id');
    }
}
