<?php

use Illuminate\Database\Seeder;
use App\Models\Cadet;
class CadetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Cadet::class,15)->create();
    }
}
