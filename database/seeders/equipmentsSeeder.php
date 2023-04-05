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
                'eqm_type' => 'G200',
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
                'eqm_type' => 'G300',
                'eqm_serial_number' => 'RAZ#6789',
                'eqm_picture' => 'RAZ.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'MOLID',
                'eqm_type' => 'G400',
                'eqm_serial_number' => 'MOL#5884',
                'eqm_picture' => 'MOL.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'TESSA',
                'eqm_type' => 'G500',
                'eqm_serial_number' => 'TES#1589',
                'eqm_picture' => 'TES.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'IKYTECH',
                'eqm_type' => 'G600',
                'eqm_serial_number' => 'IKY#4778',
                'eqm_picture' => 'IKY.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'LENOVO',
                'eqm_type' => 'G700',
                'eqm_serial_number' => 'LNO#1597',
                'eqm_picture' => 'LNO.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'BURDOK',
                'eqm_type' => 'G800',
                'eqm_serial_number' => 'BUR#4698',
                'eqm_picture' => 'BUR.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ASUS',
                'eqm_type' => 'G900',
                'eqm_serial_number' => 'ASUS#1478',
                'eqm_picture' => 'ASUS.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ROGS',
                'eqm_type' => 'G1000',
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
