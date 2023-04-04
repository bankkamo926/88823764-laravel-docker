<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 0,
                'name' => 'แบงค์',
                'emp_lname' => 'นะจ้ะ',
                'email' => 'bank@gmail.com',
                'password' =>bcrypt('0000000000'),
                'emp_gender' => 'M',
                'emp_picture' => 'bank.jpg',
                'emp_dep_id' => 2,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'เจ',
            //     'emp_lname' => 'อยากนอน',
            //     'email' => 'kamin@gmail.com',
            //     'password' => '1111111111',
            //     'emp_gender' => 'M',
            //     'emp_picture' => 'jj.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'แบม',
            //     'emp_lname' => 'จุ๊บุ',
            //     'email' => 'bam@gmail.com',
            //     'password' => '2222222222',
            //     'emp_gender' => 'F',
            //     'emp_picture' => 'bam.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'ต่อ',
            //     'emp_lname' => 'ภัยพิบัติ',
            //     'email' => 'tor@gmail.com',
            //     'password' => '3333333333',
            //     'emp_gender' => 'M',
            //     'emp_picture' => 'tor.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'เพชร',
            //     'emp_lname' => 'หลายใจ',
            //     'email' => 'petch@gmail.com',
            //     'password' => '4444444444',
            //     'emp_gender' => 'M',
            //     'emp_picture' => 'petch.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'อ้อม',
            //     'emp_lname' => 'สวยสุด',
            //     'email' => 'aom@gmail.com',
            //     'password' => '5555555555',
            //     'emp_gender' => 'F',
            //     'emp_picture' => 'aom.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'น้ำหวาน',
            //     'emp_lname' => 'สุดสวย',
            //     'email' => 'namwan@gmail.com',
            //     'password' => '6666666666',
            //     'emp_gender' => 'F',
            //     'emp_picture' => 'namwan.jpg',
            //     'emp_dep_id' => 2,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'กร',
            //     'emp_lname' => 'ว่าที่ร้อยตรี',
            //     'email' => 'korn@gmail.com',
            //     'password' => '7777777777',
            //     'emp_gender' => 'M',
            //     'emp_picture' => 'korn.jpg',
            //     'emp_dep_id' => 3,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            // ],
            // [
            //     'id' => 0,
            //     'name' => 'กล์อฟ',
            //     'emp_lname' => 'ซูเปอร์ทีมลีด',
            //     'email' => 'golf@gmail.com',
            //     'password' => '888888888',
            //     'emp_gender' => 'M',
            //     'emp_picture' => 'golf.jpg',
            //     'emp_dep_id' => 1,
            //     'created_at' =>  \Carbon\Carbon::now(),
            //     'updated_at' => \Carbon\Carbon::now(),
            ],
        ];


                foreach($users as $users)
            {
                DB::table('users')->insert($users);
            }
    }
}
