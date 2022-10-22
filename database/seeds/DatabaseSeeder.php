<?php

use App\User;
use App\Model\Role;
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
        // $this->call(UserSeeder::class);
        User::truncate();

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => 3,
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => 2,
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => 1,
            ],
        ];

        User::insert($users);

        $roles = [
            ['name' => 'guests'],
            ['name' => 'users'],
            ['name' => 'admin'],
        ];

        Role::insert($roles);
    }
}
