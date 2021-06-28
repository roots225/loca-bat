<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'admin',
            'lastname' => 'john',
            'phone' => '0709779639',
            'email' => 'admin@loca-bat.com',
            'password' => Hash::make('password'),
            'role' => User::ADMIN
        ]);

        User::create([
            'firstname' => 'Owner name',
            'lastname' => 'owner',
            'phone' => '0709779639',
            'email' => 'owner@loca-bat.com',
            'password' => Hash::make('password'),
            'role' => User::OWNER
        ]);

        User::create([
            'firstname' => 'tenant user',
            'lastname' => 'tenant',
            'phone' => '0709779639',
            'email' => 'tenant@loca-bat.com',
            'password' => Hash::make('password'),
            'role' => User::TENANT
        ]);
    }
}
