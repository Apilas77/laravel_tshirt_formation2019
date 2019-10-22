<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = new \App\Type();
        $type->nom = "vêtements";
        $type->save();

        $type = new \App\Type();
        $type->nom = "Chaussure";
        $type->save();

        $type = new \App\Type();
        $type->nom = "Pantalon";
        $type->save();

        $type = new \App\Type();
        $type->nom = "Chapeau";
        $type->save();
    }
}
