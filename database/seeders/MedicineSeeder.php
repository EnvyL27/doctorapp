<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicine = [
            [
                'name' => 'Paracetamol',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Ibuprofen',
                'price' => 6000,
                'stock' => 10,
            ],
            [
                'name' => 'Antibiotik',
                'price' => 6500,
                'stock' => 10,
            ],
            [
                'name' => 'Mefenamic acid',
                'price' => 6000,
                'stock' => 10,
            ],
            [
                'name' => 'Dextromethorphan',
                'price' => 8000,
                'stock' => 10,
            ],
            [
                'name' => 'Chlorpheniramine',
                'price' => 4000,
                'stock' => 10,
            ],
        ];

        DB::table('medicine')->insert($medicine);
    }
}
