<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => 500,
                'category' => 'mobile',
                'description' => 'A smartphone with 4GB RAM',
                'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg'

            ],
            [
                'name' => 'Oppo mobile',
                'price' => 900,
                'category' => 'mobile',
                'description' => 'A smartphone with 8GB RAM',
                'gallery' => 'https://image.oppo.com/content/dam/oppo/au/mkt/homepage/homepage-top-banner/reno4-simba-mobile-banner-mobile.jpg'

            ],
            [
                'name' => 'SONY Tv',
                'price' => 1000,
                'category' => 'tv',
                'description' => 'A 36Inch SmartTv',
                'gallery' => 'https://res.feednews.com/assets/v2/091d8d1d8e2ad86a6e1679d10675b599?width=1280&height=720&quality=hq&category=us_Digital_Technology'

            ],
            [
                'name' => 'Panasonic Tv',
                'price' => 9999,
                'category' => 'tv',
                'description' => 'A 42Inch SmartTv',
                'gallery' => 'https://5.imimg.com/data5/FY/LN/MY-7430189/e400-panasonic-led-tv-500x500.jpg'

            ],


        ]);
    }
}
