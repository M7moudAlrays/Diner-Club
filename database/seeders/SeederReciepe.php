<?php

namespace Database\Seeders;

use App\Models\Reciepe;
use Illuminate\Database\Seeder;

class SeederReciepe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Reciepe::factory()->count(10)->create();
    }
}
