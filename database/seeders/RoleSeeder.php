<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $roles = [
            ['name' => 'SuperAdmin'],
            ['name' => 'Admin'],
            ['name' => 'Author'],
            ['name' => 'Moderator'],
         ];

         foreach($roles as $role){
               Role::create($role);
         }
    }
}
