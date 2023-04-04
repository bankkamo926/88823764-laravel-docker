<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TasksModel;
use Illuminate\Support\Facades\DB;

class tasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'task_id' => 0,
                'task_status' => '1',
                'task_type' => 'การเบิก',
                'task_approved' => date('Y-m-d H:i:s'),
                'task_success_date' =>date('Y-m-d H:i:s'),
                'task_get_date' => date('Y-m-d H:i:s'),
                'task_details_repair' => '-',
                'task_quantity_request' => 20,
                'task_details_assess' => '-',
                'task_stars' => '0',
                'task_eqm_id' => 1,
                'task_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'task_id' => 0,
                'task_status' => '1',
                'task_type' => 'การซ่อม',
                'task_approved' => date('Y-m-d H:i:s'),
                'task_success_date' => date('Y-m-d H:i:s'),
                'task_get_date' => date('Y-m-d H:i:s'),
                'task_details_repair' => 'จอฟ้า',
                'task_quantity_request' => 0,
                'task_details_assess' => '-',
                'task_stars' => '0',
                'task_eqm_id' => 2,
                'task_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        foreach($tasks as $tasks)
        {
            DB::table('tasks')->insert($tasks);
        }
    }
}
