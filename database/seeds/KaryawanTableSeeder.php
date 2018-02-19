<?php

use Illuminate\Database\Seeder;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('karyawan')->insert([
        	'nama' => 'Noviandri',
        	'nip' => '-',
        	'jabatan' => 'Chief Executive Officer',
        	'alamat' => 'Jl. Kampung Gedong No. 28 RT/RW 03/19 Kel. Kemiri, Kec. Beji, Depok, Jawa Barat',
        	]);
    }
}
