<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_requestsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'tre_status',
        'tre_approved_date',
        'tre_success_date',
        'tre_get_date',
        'tre_quantity_request',
        'tre_emp_id',
    ];
}
