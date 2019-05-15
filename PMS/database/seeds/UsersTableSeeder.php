<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' =>'1',
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@doctorMS.com',
            'password' => bcrypt('admindoctor'),
        ]);
        DB::table('users')->insert([
            'role_id' =>'2',
            'name' => 'Doctor',
            'username' => 'doctor',
            'email' => 'doctor@doctorMS.com',
            'password' => bcrypt('doctor'),
        ]);
   
        DB::table('users')->insert([
            'role_id' =>'3',
            'name' => 'Patient',
            'username' => 'patient',
            'email' => 'patient@patientMS.com',
            'password' => bcrypt('patient'),
        ]);
    }
}
