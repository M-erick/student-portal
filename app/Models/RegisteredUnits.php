<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUnits extends Model
{
    use HasFactory;
    protected $fillable = ['admission','course','stage_code'];

}
