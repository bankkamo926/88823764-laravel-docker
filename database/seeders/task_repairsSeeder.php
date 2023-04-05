<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class task_repairsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task_repairs = [
            [
                'tr_id' => 0,
                'tr_status' => '1',
                'tr_approved' => date('Y-m-d H:i:s'),
                'tr_success_date' => date('Y-m-d H:i:s'),
                'tr_get_date' => date('Y-m-d H:i:s'),
                'tr_details_repair' => 'จอฟ้า',
                'tr_eqm_id' => 2,
                'tr_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'tr_id' => 0,
                'tr_status' => '2',
                'tr_approved' => date('Y-m-d H:i:s'),
                'tr_success_date' => date('Y-m-d H:i:s'),
                'tr_get_date' => date('Y-m-d H:i:s'),
                'tr_details_repair' => 'จอฟ้า',
                'tr_eqm_id' => 2,
                'tr_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'tr_id' => 0,
                'tr_status' => '3',
                'tr_approved' => date('Y-m-d H:i:s'),
                'tr_success_date' => date('Y-m-d H:i:s'),
                'tr_get_date' => date('Y-m-d H:i:s'),
                'tr_details_repair' => 'จอฟ้า',
                'tr_eqm_id' => 2,
                'tr_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'tr_id' => 0,
                'tr_status' => '4',
                'tr_approved' => date('Y-m-d H:i:s'),
                'tr_success_date' => date('Y-m-d H:i:s'),
                'tr_get_date' => date('Y-m-d H:i:s'),
                'tr_details_repair' => 'ปุ่มพัง',
                'tr_eqm_id' => 2,
                'tr_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];
    }
}
