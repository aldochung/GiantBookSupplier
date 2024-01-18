<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publisher_id'=>'1',
            'title'=>'Heartbreak Motel','author'=>'Ika Natassa','year'=>'2022',
            'synopsis'=>'Buku ini menceritakan tentang kisah cinta Ava di Heartbreak Motel.',
            'image'=>'assets/coverHeartbreakMotel.jpg'
        ]);

        DB::table('books')->insert([
            'publisher_id'=>'2',
            'title'=>'Pathway to English FOR SMA/MA GRADE X',
            'author'=>'TH. M. SUDARWATI-EUDIA GRACE','year'=>'2022',
            'synopsis'=>'Buku ini membantu para siswa SMA/MA kelas 10 untuk lebih memahami bahasa Inggris.',
            'image'=>'assets/coverPathwaytoEnglish.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id'=>'3',
            'title'=>'77 Cara Bodoh Hidup Bahagia',
            'author'=>'Danang Priyadi','year'=>'2020',
            'synopsis'=>'Buku ini mengajak kita untuk menggali dan menemukan desain kebahagiaan yang telah TUhan berikan untuk masing-masing orang.',
            'image'=>'assets/cover77CaraHidupBahagia.jpg'
        ]);
        DB::table('books')->insert([
            'publisher_id'=>'4',
            'title'=>'Haru Mahameru',
            'author'=>'Balakarsa','year'=>'2021',
            'synopsis'=>'Buku ini menceritakan tentang tiga sahabat yang memutuskan untuk menentang diri mereka dalam rangka kenaikan kelas mereka, dengan mendaki puncak semeru',
            'image'=>'assets/coverHaruMahameru.jpg'
        ]);

        DB::table('books')->insert([ 
            'publisher_id'=>'5',
            'title'=>'Guru Aini',
            'author'=>'Andrea Hirata','year'=>'2020',
            'synopsis'=>'Buku ini menceritakan kehidupan seorang guru bernama Desi mengajar di sekolah pelosok',
            'image'=>'assets/coverGuruAini.png'
        ]);

        DB::table('books')->insert([
            'publisher_id'=>'1',
            'title'=>'Buku Stiker Cerita Alkitab: Kelahiran Yesus dan cerita-cerita lain',
            'author'=>'Miles Kelly Publishing','year'=>'2022',
            'synopsis'=>'Buku ini berisi cerita-cerita dari Perjanjian Baru yang dipenuhi berbagai aktivitas seru untuk anak-anak.',
            'image'=>'assets/coverBukuStikerCeritaAlkitab.jpg' 
        ]);

        //
    }
}
