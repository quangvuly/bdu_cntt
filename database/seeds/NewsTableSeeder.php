<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10; $i <= 15 ; $i++) { 
            // DB::table('cnttNews')->insert([
            //     'cnttNewsTitle' => 'Tiêu đề '. $i,
            //     'cnttNewsAuthor' => 'Tác giả '. $i,
            //     'cnttNewsDesc' => 'Đây là mô tả của bài viết '. $i,
            //     'cnttNewsDetail' => 'Đây là nôi dung chi tiết của bài viết '.$i.'. Bài viết đang trong quá trình hoàn thiện, quý đọc giả vui lòng truy cập sau,' ,
            //     'cnttNewsImage' => 'image.jpg',
            //     'cnttNewsCateID' => rand(1,6),
            //     'cnttNewsUserID' => rand(2,8),
            //     'created_at' => new \DateTime(),
            // ]);
            DB::table('cnttNews')->insert([
                'cnttNewsTitle' => 'Tiêu đề '. $i,
                // 'cnttNewsAuthor' => 'Tác giả '. $i,
                'cnttNewsDesc' => 'Đây là mô tả của bài viết '. $i,
                'cnttNewsDetail' => 'Đây là nôi dung chi tiết của bài viết '.$i.'. Bài viết đang trong quá trình hoàn thiện, quý đọc giả vui lòng truy cập sau,' ,
                'cnttNewsImage' => 'image.jpg',
                'cnttNewsCateID' => 8,
                'cnttNewsUserID' => 1,
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
