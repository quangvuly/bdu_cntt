<?php

use Illuminate\Database\Seeder;

class CooperateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 8 ; $i++) { 
            DB::table('cnttcooperate')->insert([
                'cnttCooperateName' => 'Liên doanh '. $i,
                'cnttCooperateDetail' => 'Đây là nôi dung mô tả sơ lược giảng viên '.$i.'. Nội dung đang trong quá trình hoàn thiện, quý đọc giả vui lòng truy cập sau,' ,
                'cnttCooperateImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
