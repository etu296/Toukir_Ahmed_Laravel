<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'toukir',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
            'role'=>'admin'
        ]);
    }
}
