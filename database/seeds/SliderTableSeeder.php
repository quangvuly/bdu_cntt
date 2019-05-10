<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3 ; $i++) { 
            DB::table('cnttSlider')->insert([
                'cnttSliderTitle' => 'Tiêu đề chính '. $i,
                'cnttSliderIntro' => 'Đây là mô tả của slide '. $i,
                'cnttSliderDetail' => 'Đây là nôi dung chi tiết của slide '.$i.'. Slider đang trong quá trình hoàn thiện, quý đọc giả vui lòng truy cập sau,' ,
                'cnttSliderImage' => 'image.jpg',
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
