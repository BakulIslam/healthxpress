<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $admin = [
            'name' => 'admin',
            'phone' => '3',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'status' => 0
        ];
        Admin::create($admin);
    }
}
