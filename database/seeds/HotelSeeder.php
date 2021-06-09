<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'name' => 'ロサンゼルス',
                'location' => 'アメリカ',
                'description' => '夜景が綺麗なホテル',
                'image' => 'https://cf.bstatic.com/images/hotel/max1024x768/117/117731489.jpg'
            ],
            [
                'name' => 'バルセロナ',
                'location' => 'スペイン',
                'description' => 'サグラダ・ファミリアが見えるホテル',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/1a/3a/9e/54/other.jpg'
            ],
            [
                'name' => 'マリーナベイ・サンズホテル',
                'location' => 'シンガポール',
                'description' => 'インフィニティプールが楽しめる',
                'image' => 'https://www.wbf.co.jp/singapore/1_Infinity-pool.jpg'
            ],
        ];
        foreach ($hotels as $hotel) {
            Hotel::create(array(
                'name' => $hotel['name'],
                'location' => $hotel['location'],
                'description' => $hotel['description'],
                'image' => $hotel['image']
            ));
        }
    }
}
