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
        DB::table('cnttuser')->insert(
            [
                [
                    'cnttUserFirstName' => 'Super',
                    'cnttUserLastName' => 'Admin',
                    'cnttUserEmail' => 'admin@example.local',
                    'cnttUserPhone' => '0384282048',
                    'cnttUserPassword' => bcrypt('123456'),
                    'cnttUserAvatar' => 'image.jpg',
                    'cnttUserLevel' => 0,
                    'created_at' => new \DateTime(),
                ],
                // [
                //     'cnttUserFirstName' => 'News',
                //     'cnttUserLastName' => 'Admin',
                //     'cnttUserEmail' => 'newsadmin@example.local',
                //     'cnttUserPhone' => '0123456789',
                //     'cnttUserPassword' => bcrypt('123456'),
                //     'cnttUserAvatar' => 'image.jpg',
                //     'cnttUserLevel' => 1,
                //     'created_at' => new \DateTime(),
                // ],
                // [
                //     'cnttUserFirstName' => 'User',
                //     'cnttUserLastName' => '01',
                //     'cnttUserEmail' => 'user01@example.local',
                //     'cnttUserPhone' => '0112456789',
                //     'cnttUserPassword' => bcrypt('123456'),
                //     'cnttUserAvatar' => 'image.jpg',
                //     'created_at' => new \DateTime(),
                // ],
                // [
                //     'cnttUserFirstName' => 'User',
                //     'cnttUserLastName' => '02',
                //     'cnttUserEmail' => 'user02@example.local',
                //     'cnttUserPhone' => '0123498765',
                //     'cnttUserPassword' => bcrypt('123456'),
                //     'cnttUserAvatar' => 'image.jpg',
                //     'created_at' => new \DateTime(),
                // ],
                // [
                //     'cnttUserFirstName' => 'User',
                //     'cnttUserLastName' => '05',
                //     'cnttUserEmail' => 'user05@example.local',
                //     'cnttUserPhone' => '0988554221',
                //     'cnttUserPassword' => bcrypt('123456'),
                //     'cnttUserAvatar' => 'image.jpg',
                //     'created_at' => new \DateTime(),
                // ]
            ]);
    }
}
