<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\publisher;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name'=>'PT Gramedia Pustaka Utama', 
            'address'=>'Gedung Kompas Gramedia Blok 1 lt.5 Jl. Palmerah Barat No.29-37 Jakarta 10270 Indonesia ',
            'phone'=>'(021) 53650111',
            'email'=>'redaksi@gramediapustakautama.id',
            'picture'=>'/assets/logogramed.png'
        ]);

        DB::table('publishers')->insert([
            'name'=>'Penerbit Erlangga',
            'address'=>'Jl. H. Baping Raya No. 100 Ciracas, Jakarta Timur 13740',
            'phone'=>'(021) 8717006',
            'email'=>'suport@erlangga.co.id',
            'picture'=>'/assets/logoPenerbitErlangga.jpg'
        ]);

        DB::table('publishers')->insert([
            'name'=>'PT Gramedia Widiasarana Indonesia',
            'address'=>'Gedung Kompas Gramedia Blok 1/lantai 3 Jl. Palmerah Barat No. 29-37, Jakarta, 10270',
            'phone'=>'(021) 536 50110 /(021) 536 50111',
            'email'=>'redaksi@grasindo.id',
            'picture'=>'/assets/logoGrasindo.jpg'
        ]);

        DB::table('publishers')->insert([
            'name'=>'Falcon Publishing',
            'address'=>'Jl. Duren Tiga No.35, RT.4/RW.1, Duren Tiga, Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760, Indonesia',
            'phone'=>'(021) 7974970',
            'email'=>'contact@falcon.co.id',
            'picture'=>'/assets/logoFalconPublishing.png'
        ]);
        DB::table('publishers')->insert([
            'name'=>'Bentang Pustaka',
            'address'=>'Jl. Pesanggrahan No.8 RT/RW : 04/36, Sanggrahan, Wedomartani, Ngemplak, Sleman, Yogyakarta, 55584.',
            'phone'=>'(0274) 7370635',
            'email'=>'promosi@bentangpustaka.com',
            'picture'=>'/assets/logoBentangPustaka.jpg'
        ]);
        //
    }
}
