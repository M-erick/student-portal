<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisteredUnit extends Model
{
    use HasFactory;
    protected $primary = 'RegNumber';
    protected $fillable = [
        'Admission',
        'Unit_code'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
