<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $user = new \App\User();
//        $user->name = "Marie de Ubeda";
//        $user->email ="JeanDeLaFontaine@gmail.com";
//        $user->password = \Illuminate\Support\Facades\Hash::make(12345678);
//        $user->save();
//        $user->roles()->attach(1);

        $user = new \App\User();
        $user->name = "Bob l'éponge";
        $user->email ="boblaponge@gmail.com";
        $user->password = \Illuminate\Support\Facades\Hash::make(12345678);
        $user->save();
        $user->roles()->attach(2);
    }
}
