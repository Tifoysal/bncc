<?php

use Illuminate\Database\Seeder;
use App\Models\BusinessSetting;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          BusinessSetting::create([
                'user_id'=>1,
                'name'=>'IUBAT BNCC Platoon',
                'contact'=>'01823050085',
                'email'=>'cse.rihab@gmail.com',
                'instruction'=>'last date is 2019-9-25',
            ]);
    }
}

