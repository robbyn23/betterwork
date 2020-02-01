<?php

namespace iteos\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    protected $fillable = [
    	'employee_id',
    	'institution_name',
    	'grade',
    	'major',
    	'gpa',
    ];

    public function Parent()
    {
    	return $this->belongsTo(Employee::class);
    }
}