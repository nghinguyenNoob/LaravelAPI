<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['first_name'=>'Nghi', 'last_name'=>'Nguyen Cong', 'address'=>'Thua Thien Hue', 'created_at'=> now()],
        	['first_name'=>'Cuong', 'last_name'=>'Vo Van', 'address'=>'Thua Thien Hue', 'created_at'=> now()],
        	['first_name'=>'Nhi', 'last_name'=>'Nguyen Truong Uyen', 'address'=>'Thua Thien Hue', 'created_at'=> now()],
        ];
         DB::table('students')->insert($data);
    }
}
