<?php

namespace Database\Seeders;

use App\Models\Rasyad;
use Illuminate\Database\Seeder;

class RasyadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Rasyad();
        $mhs1->nbi = "1461900114";
        $mhs1->nama_mhs = "Hairumi Rasyad";
        $mhs1->save();

        $mhs2 = new Rasyad();
        $mhs2->nbi = "1461901114";
        $mhs2->nama_mhs = "Hai Rasyad";
        $mhs2->save();
    }
}
