<?php

namespace Database\Seeders;

use App\Models\MasterData\ConfigPayment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config_payment = [
            [
                'fee' => '15000',
                'vat' => '20', // vat is percentage
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        // this array config_payment  will be insert to tables 'config_payment'
        ConfigPayment::insert($config_payment);
    }
}
