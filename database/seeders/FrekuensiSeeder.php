<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrekuensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('f_radio')->insert([
            [
            	'frekuensi' => 6.774,
		    	'bandwith' => 2.8,
		    	'type' => 'VOICE',
		    	'service' => 'TETAP/ BERGERAK',
		    	'power' => '80',
		    	'location' => 'NKRI - 24 JAM',
				'unit' => 'LANAL 1',
		    	'status' => 'AKTIF',
		    	'type_code' => 'HF',
                'divisi_code' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            	'frekuensi' => 6.774,
		    	'bandwith' => 2.8,
		    	'type' => 'VOICE',
		    	'service' => 'TETAP/ BERGERAK',
		    	'power' => '80',
		    	'location' => 'NKRI - 24 JAM',
				'unit' => 'LANAL 2',
		    	'status' => 'AKTIF',
		    	'type_code' => 'UHF',
                'divisi_code' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            	'frekuensi' => 6.774,
		    	'bandwith' => 2.8,
		    	'type' => 'VOICE',
		    	'service' => 'TETAP/ BERGERAK',
		    	'power' => '80',
		    	'location' => 'NKRI - 24 JAM',
				'unit' => 'LANAL 3',
		    	'status' => 'AKTIF',
		    	'type_code' => 'VHF',
                'divisi_code' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            	'frekuensi' => 6.774,
		    	'bandwith' => 2.8,
		    	'type' => 'VOICE',
		    	'service' => 'TETAP/ BERGERAK',
		    	'power' => '80',
		    	'location' => 'NKRI - 24 JAM',
				'unit' => 'LANAL 4',
		    	'status' => 'AKTIF',
		    	'type_code' => 'HF,UFF,VHF',
                'divisi_code' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
