<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomStatus;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $abcd = array(
            'A',
            'B',
            'C',
            'D'
        );
        $price = array(
            45,
            50,
            65,
            70,
            85,
            95,
            12,
            15,
            100,
            20,
        );
        static $order = 10;
        return [
            'type_id' => Type::all()->random()->id,
            'room_status_id' => '1',
            'number' => $order++.$abcd[array_rand($abcd)],
            'capacity' => $this->faker->numberBetween(1,12),
            'price' => $this->faker->randomElement($price),
            'view' => $this->faker->paragraph(35)
        ];
    }
}
