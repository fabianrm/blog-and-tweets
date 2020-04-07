<?php

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
        User::create([
            'name'=>'Luna',
            'email'=>'fabianrm@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        //Llamar a factory para crear usuarios
        factory(User::class,10)->create();
    }
}
