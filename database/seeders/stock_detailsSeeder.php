<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock_detailsModel;
use Illuminate\Support\Facades\DB;

class stock_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock_details = [
            [
                'sd_id' => 0,
                'sd_name' => 'Mouse',
                'sd_serial_number' => 'HMS00000001',
                'sd_stk_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'sd_id' => 0,
                'sd_name' => 'Mouse',
                'sd_serial_number' => 'HMS00000002',
                'sd_stk_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'sd_id' => 0,
                'sd_name' => 'Mouse',
                'sd_serial_number' => 'HMS00000003',
                'sd_stk_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'sd_id' => 0,
                'sd_name' => 'Mouse',
                'sd_serial_number' => 'HMS00000004',
                'sd_stk_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'sd_id' => 0,
                'sd_name' => 'Mouse',
                'sd_serial_number' => 'HMS00000005',
                'sd_stk_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        foreach($stock_details as $stock_details)
        {
            DB::table('stock_details')->insert($stock_details);
        }
    }
}
