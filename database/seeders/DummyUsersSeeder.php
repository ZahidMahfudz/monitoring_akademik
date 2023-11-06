<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>' si Operator',
                'email'=>'Operator@gmail.com',
                'role'=>'Operator',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>' si mahasiswa',
                'email'=>'mahasiswa@gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('23456')
            ],
            [
                'name'=>' si dosen wali',
                'email'=>'doswal@gmail.com',
                'role'=>'doswal',
                'password'=>bcrypt('34567')
            ],
            [
                'name'=>'Aris Puji Widodo',
                'email'=>'Apw@gmail.com',
                'role'=>'doswal',
                'password'=>bcrypt('34567')
            ],
            [
                'name'=>'Muhammad Malik Hakim',
                'email'=>'MMH@gmail.com',
                'role'=>'doswal',
                'password'=>bcrypt('34567')
            ],
            [
                'name'=>'Adi Wibowo',
                'email'=>'AW@gmail.com',
                'role'=>'doswal',
                'password'=>bcrypt('34567')
            ],
            [
                'name'=>' si departemen',
                'email'=>'department@gmail.com',
                'role'=>'departemen',
                'password'=>bcrypt('45678')
            ]
        ];
        foreach($userData as $key => $val){
            User::create($val);
        };
    }

}
