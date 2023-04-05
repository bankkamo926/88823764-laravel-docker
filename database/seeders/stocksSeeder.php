<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StocksModel;
use Illuminate\Support\Facades\DB;

class stocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            [
                'stk_id' => 0,
                'stk_name' => 'Logitech',
                'stk_type' => 'Mouse',
                'stk_series' => 'G100',
                'stk_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'stk_pictrue' => 'LGT.jpg',
                'stk_quantity' => 100,
                'stk_emp_id' => 9,
                'stk_tre_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'stk_id' => 0,
                'stk_name' => 'Razor',
                'stk_type' => 'Mouse',
                'stk_series' => 'G200',
                'stk_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'stk_pictrue' => 'RAZ.jpg',
                'stk_quantity' => 100,
                'stk_emp_id' => 9,
                'stk_tre_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'stk_id' => 0,
                'stk_name' => 'MOLID',
                'stk_type' => 'Mouse',
                'stk_series' => 'G300',
                'stk_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'stk_pictrue' => 'MOL.jpg',
                'stk_quantity' => 100,
                'stk_emp_id' => 9,
                'stk_tre_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        foreach($stocks as $stocks)
        {
            DB::table('stocks')->insert($stocks);
        }
    }
}
