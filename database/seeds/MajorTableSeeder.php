<?php

use Illuminate\Database\Seeder;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cnttMajor')->insert([
            [
                'cnttMajorTitle' => 'Khoa học máy tính',
                'cnttMajorContent' => 'Nội dung chi tiết của bộ môn',
                'cnttMajorImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ],
            [
                'cnttMajorTitle' => 'Hệ thống thông tin',
                'cnttMajorContent' => 'Nội dung chi tiết của bộ môn',
                'cnttMajorImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ],
            [
                'cnttMajorTitle' => 'Mạng máy tính & Truyền dữ liệu',
                'cnttMajorContent' => 'Nội dung chi tiết của bộ môn',
                'cnttMajorImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ],
            [
                'cnttMajorTitle' => 'Công nghệ phần mềm',
                'cnttMajorContent' => 'Nội dung chi tiết của bộ môn',
                'cnttMajorImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ]
        ]);
    }
}
