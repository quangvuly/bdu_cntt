<?php

use Illuminate\Database\Seeder;

class LecturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 8 ; $i++) { 
            DB::table('cnttLecturer')->insert([
                'cnttLecturerFullName' => 'Full name '. $i,
                'cnttLecturerPosition' => 'Chức vụ '. $i,
                'cnttLecturerDetail' => 'Đây là nôi dung mô tả sơ lược giảng viên '.$i.'. Nội dung đang trong quá trình hoàn thiện, quý đọc giả vui lòng truy cập sau,' ,
                'cnttLecturerImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
