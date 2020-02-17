<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Rihab Rahman',
            'email'=>'cse.rihab@gmail.com',
            'role'=>'PUO',
            'gender'=>'Male',
            'password'=>bcrypt('12345678'),
            'status'=>'Active',
        ]);
    }
}
