<?php

namespace Database\Seeders;

use App\Models\Achivement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchivementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Achivement::create([
        //     'name'=>'National Childrens Award Competition',
        //     'category'=>'Folk Music',
        //     'position'=>' Champion',
        //     'year'=>'2011',
        //     'image'=> 'public/asset/img/blogs/1.jpg'
        //    ]);
        //    Achivement::create([
        //     'name'=>'Jatiyo Shishu Puraskar Protijogita ',
        //     'category'=>'Nazrul Sangeet',
        //     'position'=>' Champion',
        //     'year'=>'2012',
        //     'image'=> 'public/asset/img/blogs/2.jpg'
        //    ]);
           Achivement::create([
            'name'=>'Jatio Sikkha Soptaho Competition 2016',
            'category'=>'Folk Music Artiste',
            'position'=>' Champion',
            'year'=>'2016',
            'image'=> '3.jpg'
           ]);
    }
}
