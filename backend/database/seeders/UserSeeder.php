<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname'=>'Super',
            'lastname'=>'Admin',
            'email'=>'super_admin@example.com',
            'phone'=>'0711222333',
            'location'=>'Nairobi',
            'address'=>'123 Example Street',
            'password'=>'Qwerty1.',
            'role_id'=>1,
        ]);
        User::create([
           'firstname'=>'Test',
            'lastname'=>'User',
            'email'=>'test_user@example.com',
            'phone'=>'0711222333',
            'location'=>'Nairobi',
            'address'=>'123 Example Street',
            'password'=>'Qwerty1.',
            'role_id'=>2,
        ]);
        User::create([
           'firstname'=>'Test',
            'lastname'=>'Seller',
            'email'=>'test_seller@example.com',
            'phone'=>'0711222333',
            'location'=>'Nairobi',
            'address'=>'123 Example Street',
            'password'=>'Qwerty1.',
            'role_id'=>3,
        ]);
    }
}
