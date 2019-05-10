<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cnttContact')->insert(
            [
                [
                    'cnttContactBase' => 'Bình Dương',
                    'cnttContactAddress' => '504 Đại lộ Bình Dương Phường Hiệp Thành',
                    'cnttContactCity' => 'Thành phố Thủ Dầu Một - Bình Dương',
                    'cnttContactPhoneNo1' => '(0274) 3 822 058',
                    'cnttContactPhoneNo2' => '(0274) 3 820 833',
                    'cnttContactEmail' => 'info@bdu.edu.vn',
                    'cnttContactWebsite' => 'www.bdu.edu.vn',
                    'cnttContactStatus' => '1',
                    'created_at' => new \DateTime(),
                ],
                [
                    'cnttContactBase' => 'Cà Mau',
                    'cnttContactAddress' => 'Số 3, đường số 6, KDA. Đông Bắc, Phường 5',
                    'cnttContactCity' => 'Thành phố Cà Mau',
                    'cnttContactPhoneNo1' => '(0290) 3 99 7777',
                    'cnttContactPhoneNo2' => '(0290) 3 683 999',
                    'cnttContactWebsite' => 'www.bdu.edu.vn',
                    'cnttContactStatus' => '1',
                    'created_at' => new \DateTime(),
                ],
            ]);
    }
}
