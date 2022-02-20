<?php

namespace App\Models;

use App\Models\course;
use App\Models\RegisteredUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;
    protected $primary = 'Unit_code';
    protected $fillable = [
        'Unit_code',
        'Unit_name',
        'Course_code',
        'Stage_code'
    ];

    public function course()
    {
        return $this->belongsTo(course::class);
    }
    public function registeredUnits()
    {
        return $this->hasMany(RegisteredUnit::class);
    }
}
