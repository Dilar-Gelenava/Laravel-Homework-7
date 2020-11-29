<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=2; $i < 10; $i++){
		    	DB::table('users')->insert([
		            'name' => 'gela'.$i,
		            'email'=>'gela.inwkirveli.'.$i.'@gmail.com',
		            'password'=>'gelagelachemogela',
		        ]);
    		}
    }
}
