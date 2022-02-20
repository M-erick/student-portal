<?php

namespace App\Models;

use App\Models\course;
use App\Models\School;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $primary = 'Dept_code';
    protected $fillable = [
        'Dept_code',
        'Dept_name',
        'School_code'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    //Department has many courses 
    public function course(){
        return $this->hasMany(course::class);
    }
}
