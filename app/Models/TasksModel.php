<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TasksModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_status',
        'task_type',
        'task_approved_date',
        'task_success_date',
        'task_get_date',
        'task_details_repair',
        'task_quantity_request',
        'task_details_assess',
        'task_stars',
        'task_eqm_id',
        'task_emp_id',
    ];
}
