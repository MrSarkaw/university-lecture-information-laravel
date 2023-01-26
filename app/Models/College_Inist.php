<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College_Inist extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'type', 'image'];
}
