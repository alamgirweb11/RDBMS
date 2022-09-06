<?php

namespace Database\Seeders;

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
            //   UserTableSeeder::class,
            //   ProfileTableSeeder::class,
            //   CategoryTableSeeder::class,
            //   PostTableSeeder::class,
            //   RoleSeeder::class,
            //   MechanicSeeder::class,
            //   CarSeeder::class,
            //   OwnerSeeder::class,
            //   CountrySeeder::class,
            //   ProjectSeeder::class,
            //   EnvironmentSeeder::class,
              DevelopmentSeeder::class,
       ]);
    }
}
