<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class MaintextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Maintext::create(array('body'=>'adf'));
        DB::table('maintexts')->insert(
            ['name'=>'Добро пожаловать на сайт',
            'body'=> 'Описание',
            'showhide'=> 'show',
            'url'=>'index']);
    }
}
