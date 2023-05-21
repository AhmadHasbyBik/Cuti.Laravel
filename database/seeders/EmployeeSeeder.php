<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'nama' => 'Muhammad Sumbul',
        	'jeniskelamin' => 'cowo',
        	'notelepon' => '0895428122',
        ]);
    }
}
