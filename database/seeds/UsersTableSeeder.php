<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        User::create([
            'name'      => 'alaaDragneel',
            'email'     => 'alaa_dragneel@yahoo.com', 
            'password'  => bcrypt('123123'), 
        ]);
    }
}
