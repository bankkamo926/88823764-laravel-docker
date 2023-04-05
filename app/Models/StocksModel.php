<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StocksModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'stk_name',
        'stk_type',
        'stk_series',
        'stk_details_equipment',
        'stk_pictrue',
        'stk_quantity',
        'stk_emp_id',
        'stk_tre_id',
    ];
}
