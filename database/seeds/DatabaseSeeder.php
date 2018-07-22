<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 30; $i++) { 
    	     DB::table('products')->insert([
            'en_title' => 'Samsung'.$i,
            'ar_title' => 'Samsung'.$i,
            'photo' => '15322601466833.jpg',
            'en_content' => '.....',
            'ar_content' => '.....',
            'user_id' => '2',
            'user_type' => 'admin',
            'dep_id' => '5',
            'color' => '1'.$i,
            'price' => '200 LE',
            'size' => '128 GB',
        ]);
    	}
       
    }
}
