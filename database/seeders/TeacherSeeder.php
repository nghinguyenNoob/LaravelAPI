<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataTeacher = [
            ['first_name'=>'Mui', 'last_name'=>'Le Ba', 'address'=>'Thuy Duong, Thua Thien Hue', 'created_at'=>now()],
            ['first_name'=>'Chau', 'last_name'=>'Le', 'address'=>'Thua Thien Hue', 'created_at'=>now()],
            ['first_name'=>'Lam', 'last_name'=>'Bui Xuan', 'address'=>'Da Nang', 'created_at'=>now()],
        ];
        DB::table('teachers')->insert($dataTeacher);
    }
}
