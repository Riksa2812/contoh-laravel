<?php

namespace Database\Seeders;
use App\Models\MasterBarang;

use Illuminate\Database\Seeder;

class DataBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterBarang::create([
            'nama'  => 'pashmina',
            'harga' => 35000,
            'stok'  => 15
        ]);
    }
}
