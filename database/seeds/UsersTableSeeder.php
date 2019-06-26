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
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => "Iman Syaefulloh",
                'email' => "iman@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => null
            ],
            [
                'name' => "Budi",
                'email' => "budi@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 1 // presiden direktur
            ],
            [
                'name' => "Ucok",
                'email' => "ucok@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 2 // direktur
            ],
            [
                'name' => "Dewi",
                'email' => "dewi@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 3 // HR manager
            ],
            [
                'name' => "Josua",
                'email' => "josua@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 4 // Finance manager
            ],
            [
                'name' => "Tania",
                'email' => "tania@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 5 // Operation manager
            ],
            [
                'name' => "Dadang",
                'email' => "dadang@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 6 // Sales manager
            ],
            [
                'name' => "Guntur",
                'email' => "guntur@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 7 // Network manager
            ],
            [
                'name' => "Bambang",
                'email' => "bambang@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 8 // Application manager
            ],
            [
                'name' => "Heru",
                'email' => "heru@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 9 // Sales Superviser
            ],
            [
                'name' => "Jenika",
                'email' => "jenika@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 10 // Staff HR
            ],
            [
                'name' => "Darmawan",
                'email' => "darmawan@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 10 // Staff HR
            ],
            [
                'name' => "Amir",
                'email' => "amir@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 11 // Staff Finance
            ],
            [
                'name' => "Toni",
                'email' => "tony@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 11 // Staff Finance
            ],
            [
                'name' => "Wawan",
                'email' => "wawan@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 12 // Staff Network
            ],
            [
                'name' => "Erik",
                'email' => "erik@gmail.com",
                'password' => bcrypt('secret'),
                'position_id' => 13 // Staff Application
            ]
        ]);
    }
}
