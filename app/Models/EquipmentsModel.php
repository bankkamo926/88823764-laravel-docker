<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'eqm_name',
        'eqm_type',
        'eqm_series',
        'eqm_details_equipment',
        'eqm_serial_number',
        'eqm_picture',
        'eqm_emp_id',
    ];
}
