<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'Admission',
        'Cat_marks',
        'Main_marks',
        'Unit_code',
        'Total_marks',
        'Grade'
    ];
    // protected $visible =[];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
