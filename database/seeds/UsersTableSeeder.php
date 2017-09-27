<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'active'    => true,
            'firstname' => 'Maxime',
            'lastname'  => 'Leclerc',
            'username'  => 'Tenshø',
            'email'     => 'contact@maxime-leclerc.com',
            'password'  =>  bcrypt('123')
        ]);
    }
}
