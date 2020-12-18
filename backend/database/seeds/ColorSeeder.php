<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            ['name' => 'red', 'code' => 'danger'],
            ['name' => 'blue', 'code' => 'primary'],
            ['name' => 'green', 'code' => 'success'],
            ['name' => 'yellow', 'code' => 'warning'],
        ];

        foreach ($colors as $color) {
            (new Color($color))->save();
        }
    }
}
