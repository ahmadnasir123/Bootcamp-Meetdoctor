<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MasterData\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create data here
        $specialist = [
            [
                'name' => 'Dermatology',
                'price' => '25000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cardiology',
                'price' => '90000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Neurology',
                'price' => '10000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Gastroenterology',
                'price' => '15000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Psychiatry',
                'price' => '20000',
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // this array specialist  will be insert to tables 'specialist'
        Specialist::insert($specialist);
    }
}
