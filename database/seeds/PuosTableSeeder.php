<?php

use Illuminate\Database\Seeder;
use App\Models\Puo;

class PuosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//          factory(App\Models\Puo::class,15)->create();
            Puo::create([
                'user_id'=>1,
                'puo_id'=>1234567890,
                'name'=>'Rihab Rahman',
                'mobile'=>'01823050085',
                'email'=>'cse.rihab@gmail.com',
                'rank'=>'Lieutenant Colonel',
                'role'=>'PUO',
                'join'=>'2019-9-25',
                'left'=>'2029-5-20',
                'photo'=>'Acive',
                'status'=>'Active',
                'gender'=>'male',
            ]);
    }
}
