<?php

namespace App\Models;

use App\Models\Result;
use App\Models\School;
use App\Models\RegisteredUnit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $primary = 'Admission';
    protected $fillable = [
        'Admission',
        'first_name',
        'second_name',
        'school_code',
        'Stage_code'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    //Student can register many  units
    public function registeredUnits()
    {
        return $this->hasMany(RegisteredUnit::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
