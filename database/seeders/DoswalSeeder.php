<?php

namespace Database\Seeders;

use App\Models\Doswal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoswalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'nama'=>'Aris Puji Widodo',
                'NIP'=>'2407236726372'
            ],
            [
                'nama'=>'Muhammad Malik Hakim',
                'NIP'=>'2408970954221'
            ],
            [
                'nama'=>'Adi Wibowo',
                'NIP'=>'2409029837833'
            ]
        ];
        foreach($userdata as $key => $val){
            Doswal::create($val);
        };
    }
}
