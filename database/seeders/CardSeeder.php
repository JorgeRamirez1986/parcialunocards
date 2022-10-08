<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'holder_name' => 'Luz Dary Duque',
            'number' => '7',
            'verification_code' => 'LD0618',
            'franchise' => 'Bancamia',
            'status' => true,
        ]);
    }
}
