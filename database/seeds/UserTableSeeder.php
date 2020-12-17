<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345'),
            'country'=>'bangladesh',
            'address'=>'tekpara',
            'city'=>'dhaka',
            'phone_number'=>'01533137582',
            'role'=>'admin',
        ]);
    }
}
