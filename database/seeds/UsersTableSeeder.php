<?php

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
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //generate 3 Users/author
        DB::table('users')->insert([
          [
            'name' => "Jhon Due",
            'email' => "jhondue@test.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "Jane Due",
            'email' => "janedue@test.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "Mc Sumacer",
            'email' => "mcs@test.com",
            'password' => bcrypt('secret')
          ],

        ]);

    }
}
