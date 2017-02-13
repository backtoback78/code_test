<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
                [
                        'username'     => 'xavier',
                        'email'    => 'xavier@gmail.fr',
                        'password' => bcrypt('secret')
                ],

        ]);
    }
}
