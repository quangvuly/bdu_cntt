<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cnttinfo')->insert([
            'cnttInfoTitle' => 'Đại học Bình Dương - Khoa học máy tính',
            'cnttInfoFavicon' => 'fav-icon.png',
            'cnttInfoCoverImage' => 'banner.jpg' ,
            'cnttInfoLogo01' => 'image.jpg',
            'cnttInfoLogo02' => 'image.jpg',
            'cnttInfoCopyright' => '2019 Bình Dương University. All rights Reserved.',
            'created_at' => new \DateTime(),
        ]);
    }
}
