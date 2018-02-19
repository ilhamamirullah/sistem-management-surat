<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('jenis')->insert([
            'kode' => 'SK',
            'nama' => 'Surat Keterangan',
            'ket' => 'Bahwa yang bersangkutan telah melaksanakan wawancara untuk magang di CV. Rajonet Indonesia. Untuk itu saudara diharuskan untuk melakukan training selama 1 bulan untuk melihat kemampuan saudara. <br/>Demikian surat ini diinformasikan, kami ucapkan terima kasih.',
        ]);
    }
}
