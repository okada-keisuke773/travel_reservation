<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
                'hotel_id' =>1,
                'type' => 'プレステージルーム',
                'description' => 'ベッド：ツイン/キング',
                'price' => 50000,
                'image' => 'https://publicdomainq.net/images/201909/18s/publicdomainq-0038384add.jpg'
            ],
            [
                'hotel_id' =>1,
                'type' => 'ヘリテージスイート',
                'description' => 'ベッド：ツイン',
                'price' => 70000,
                'image' => 'https://publicdomainq.net/images/201709/26s/publicdomainq-0013738sid.jpg'
            ],
            [
                'hotel_id' =>2,
                'type' => 'エコノミー',
                'description' => 'ベッド：シングル×2',
                'price' => 10000,
                'image' => 'https://publicdomainq.net/images/201709/26s/publicdomainq-0013739ybx.jpg'
            ],
            [
                'hotel_id' =>2,
                'type' => 'ダブル',
                'description' => ' ベッド：ダブル',
                'price' => 30000,
                'image' => 'https://publicdomainq.net/images/201909/18s/publicdomainq-0038385xxx.jpg'
            ],
            [
                'hotel_id' =>3,
                'type' => 'スーペリアキング',
                'description' => 'ベッド：キング',
                'price' => 50000,
                'image' => 'https://cdn.pixabay.com/photo/2016/03/28/09/34/bedroom-1285156_1280.jpg'
            ],
        ];
        foreach ($rooms as $room) {
            Room::create(array(
                'hotel_id' => $room['hotel_id'],
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
            ));
        }
    }
}
