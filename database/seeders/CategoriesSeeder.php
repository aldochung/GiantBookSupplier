<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>'Comic'
        ]);
        DB::table('categories')->insert([
            'name'=>'Novel'
        ]);
        DB::table('categories')->insert([
            'name'=>'Self Improvement'
        ]);
        DB::table('categories')->insert([
            'name'=>'Kids'
        ]);
        DB::table('categories')->insert([
            'name'=>'Education'
        ]);
    }
}
