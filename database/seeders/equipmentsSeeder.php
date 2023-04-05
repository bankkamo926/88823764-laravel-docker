<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EquipmentsModel;
use Illuminate\Support\Facades\DB;

class equipmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipments = [
            [
                'eqm_id' => 0,
                'eqm_name' => 'Logitech',
                'eqm_series' => 'G200',
                'eqm_type' => 'Mouse',
                'eqm_serial_number' => 'LGT#3355',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_picture' => 'LGT.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'Razor',
                'eqm_series' => 'G300',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'RAZ#6789',
                'eqm_picture' => 'RAZ.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'MOLID',
                'eqm_series' => 'G400',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'MOL#5884',
                'eqm_picture' => 'MOL.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'TESSA',
                'eqm_series' => 'G500',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'TES#1589',
                'eqm_picture' => 'TES.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'IKYTECH',
                'eqm_series' => 'G600',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'IKY#4778',
                'eqm_picture' => 'IKY.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'LENOVO',
                'eqm_series' => 'G700',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'LNO#1597',
                'eqm_picture' => 'LNO.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'BURDOK',
                'eqm_series' => 'G800',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'BUR#4698',
                'eqm_picture' => 'BUR.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ASUS',
                'eqm_series' => 'G900',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'ASUS#1478',
                'eqm_picture' => 'ASUS.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ROGS',
                'eqm_series' => 'G1000',
                'eqm_type' => 'Mouse',
                'eqm_details_equipment' => 'เมาส์ใหม่ไฉไลกว่าเดิม',
                'eqm_serial_number' => 'ROG#3659',
                'eqm_picture' => 'ROG.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        foreach($equipments as $equipments)
        {
            DB::table('equipments')->insert($equipments);
        }
    }
}
