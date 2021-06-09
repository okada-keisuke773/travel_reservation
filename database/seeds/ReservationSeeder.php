<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $reservations = [
            [
                'user_id' => '1',
                'room_id' => 1,
                'num_of_guests' => 4,
                'check_in' => '2021-10-06',
                'check_out' => '2021-10-07'
            ],
            [
                'user_id' => '1',
                'room_id' => 2,
                'num_of_guests' => 1,
                'check_in' => '2021-05-12',
                'check_out' => '2021-09-15'
            ],
            [
                'user_id' => '1',
                'room_id' => 3,
                'num_of_guests' => 3,
                'check_in' => '2021-05-06',
                'check_out' => '2021-05-07'
            ],
            [
                'user_id' => '1',
                'room_id' => 4,
                'num_of_guests' => 2,
                'check_in' => '2021-12-20',
                'check_out' => '2021-12-24'
                
            ],
            [
                'user_id' => '1',
                'room_id' => 3,
                'num_of_guests' => 2,
                'check_in' => '2021-09-20',
                'check_out' => '2021-09-24'
            ],
            [
                'user_id' => '1',
                'room_id' => 3,
                'num_of_guests' => 3,
                'check_in' => '2021-05-18',
                'check_out' => '2021-05-28'
            ],
            [
                'user_id' => '1',
                'room_id' => 4,
                'num_of_guests' => 2,
                'check_in' => '2021-11-12',
                'check_out' => '2021-11-15'
            ],
            [
                'user_id' => '1',
                'room_id' => 2,
                'num_of_guests' => 2,
                'check_in' => '2021-05-10',
                'check_out' => '2021-05-12'
            ],
        ];

        foreach ($reservations as $reservation) {
            Reservation::create(array(
                'user_id' => $reservation['user_id'],
                'room_id' => $reservation['room_id'],
                'num_of_guests' => $reservation['num_of_guests'],
                'check_in' => $reservation['check_in'],
                'check_out' => $reservation['check_out']
            ));
        }
    }
}
