<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterYear extends Model
{
    use HasFactory;
    protected $primary = 'id';
    protected $fillable = ['admission','course','year','semester'];

}
