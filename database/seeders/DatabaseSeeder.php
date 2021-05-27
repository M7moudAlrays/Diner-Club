<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

  $this->call([
      PermissionTableSeeder::class,
    //   UserSeeder::class,
    SeederReservation::class,
    SeederCategory::class,
    SeederContact::class,
   SeederReciepe::class,
   AboutSeeder::class,
   OrderSeeder::class,
   OrderDetailSeeder::class,
   OrderRecipeSeeder::class,
   SeederContact::class



  ]);

    }
}
