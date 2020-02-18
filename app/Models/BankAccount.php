<?php

namespace iteos\Models;

use iteos\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use Uuid;

    protected $fillable = [
    	'bank_name',
    	'account_no',
    	'created_by',
    	'updated_by',
    ];

    public $incrementing = false;
}