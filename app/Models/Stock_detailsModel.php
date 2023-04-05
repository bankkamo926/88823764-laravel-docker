<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_detailsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'sd_name',
        'sd_serial_number',
        'sd_stk_id',
    ];
}
