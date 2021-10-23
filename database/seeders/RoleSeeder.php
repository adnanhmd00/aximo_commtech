<?php

namespace Database\Seeders;

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
        $role = [
            ['id' => 1,'role' => 'SuperAdmin'],
            ['id' => 2,'role' => 'Admin']
        ];

        \App\Models\Role::insert(
            $role
        );
    }
}
