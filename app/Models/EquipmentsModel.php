<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'eqm_name',
        'eqm_serial_number',
        'eqm_picture',
        'eqm_emp_id',
    ];
}
