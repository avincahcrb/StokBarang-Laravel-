<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dumyseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'avin',
                'email' => 'avin@gmail.com',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'ivan',
                'email' => 'ivan@gmail.com',
                'password' => bcrypt('123')
            ]
        ];
        foreach ($data as $key => $val) {
            User::create($val);
        }
    }
}
