<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6 ; $i++) { 
            DB::table('cnttcategory')->insert([
                'cnttCateName' => 'Danh mục '. $i,
                'cnttCateParent' => rand(1,6),
                'cnttCateUserID' => rand(3,7),
                'cnttCateSlug' => 'danhmuc-'.$i,
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
