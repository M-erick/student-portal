<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class course extends Model
{
    use HasFactory;
    protected $primary = 'Course_code';
    
    protected $fillable = [
        'Course_code',
        'Course_name',
        'Dept_code'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function unit()
    {
        return $this->hasMany(Unit::class);
    }
}
