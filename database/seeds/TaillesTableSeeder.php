<?php

use Illuminate\Database\Seeder;

class TaillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $taille = ['Xs','S','M','L','Xl','XXl'];
//        $taille = ['36','38','40','42','44','46'];
        $taille = ['54','55','56','57','58','59','60','61'];
        foreach ($taille as $t) {
            $taille = new \App\Taille();
            $taille->nom = $t;
            $taille->type_id = 4;
            $taille->save();
        }
    }
}
