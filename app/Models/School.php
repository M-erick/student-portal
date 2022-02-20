<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class School extends Model
{
    use HasFactory;
    protected $primary = 'school_code';
    protected $fillable = [
        'school_code',
        'school_name'
    ];

public function department() {
    return $this->hasMany(Department::class);
}
}
