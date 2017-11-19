<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'Admin')->first();
        User::create([
            'role_id'   => $role->id,
            'name'      => 'admin',
            'email'     => 'admin@test.com',
            'password'  => bcrypt('password'),
        ]);
    }
}
