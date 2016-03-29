<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'estgroupe',
                'email' => 'devservice@estgroupe.com',
                'password' => '$2y$10$DM0POUaceYGiXcNXTP1xYeF3Fr41jQbYtVZ9jzLsg2mnaIapzJPD6',
                'remember_token' => 'FZbCnwbQ87VRXdNehrM4QutdxHuvrpELqayl8p32Bq4ySnNM0ueX5xEv7X1r',
                'created_at' => '2016-03-20 23:32:13',
                'updated_at' => '2016-03-21 00:54:51',
            ),
        ));
        
        
    }
}
