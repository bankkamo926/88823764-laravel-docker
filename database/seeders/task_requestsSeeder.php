<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\task_requestsModel;
use Illuminate\Support\Facades\DB;

class task_requestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Bangkok');
        $task_requests = [
            [
                'tre_id' => 0,
                'tre_status' => '1',
                'tre_approved' => date('Y-m-d H:i:s'),
                'tre_success_date' =>date('Y-m-d H:i:s'),
                'tre_get_date' => date('Y-m-d H:i:s'),
                'tre_quantity_request' => 10,
                'tre_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'tre_id' => 0,
                'tre_status' => '2',
                'tre_approved' => date('Y-m-d H:i:s'),
                'tre_success_date' =>date('Y-m-d H:i:s'),
                'tre_get_date' => date('Y-m-d H:i:s'),
                'tre_quantity_request' => 20,
                'tre_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'tre_id' => 0,
                'tre_status' => '3',
                'tre_approved' => date('Y-m-d H:i:s'),
                'tre_success_date' =>date('Y-m-d H:i:s'),
                'tre_get_date' => date('Y-m-d H:i:s'),
                'tre_quantity_request' => 30,
                'tre_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        foreach($task_requests as $task_requests)
        {
            DB::table('task_requests')->insert($task_requests);
        }
    }
}
