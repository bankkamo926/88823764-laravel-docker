<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task_repairsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'tr_status',
        'tr_approved_date',
        'tr_success_date',
        'tr_get_date',
        'tr_details_repair',
        'tr_emp_id',
        'tr_eqm_id',

    ];
}
