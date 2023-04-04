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
                'eqm_serial_number' => 'LGT#3355',
                'eqm_picture' => 'LGT.jpg',
                'eqm_emp_id' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'Razor',
                'eqm_serial_number' => 'RAZ#6789',
                'eqm_picture' => 'RAZ.jpg',
                'eqm_emp_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'MOLID',
                'eqm_serial_number' => 'MOL#5884',
                'eqm_picture' => 'MOL.jpg',
                'eqm_emp_id' => 3,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'TESSA',
                'eqm_serial_number' => 'TES#1589',
                'eqm_picture' => 'TES.jpg',
                'eqm_emp_id' => 4,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'IKYTECH',
                'eqm_serial_number' => 'IKY#4778',
                'eqm_picture' => 'IKY.jpg',
                'eqm_emp_id' => 5,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'LENOVO',
                'eqm_serial_number' => 'LNO#1597',
                'eqm_picture' => 'LNO.jpg',
                'eqm_emp_id' => 6,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'BURDOK',
                'eqm_serial_number' => 'BUR#4698',
                'eqm_picture' => 'BUR.jpg',
                'eqm_emp_id' => 7,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ASUS',
                'eqm_serial_number' => 'ASUS#1478',
                'eqm_picture' => 'ASUS.jpg',
                'eqm_emp_id' => 8,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'eqm_id' => 0,
                'eqm_name' => 'ROGS',
                'eqm_serial_number' => 'ROG#3659',
                'eqm_picture' => 'ROG.jpg',
                'eqm_emp_id' => 9,
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
