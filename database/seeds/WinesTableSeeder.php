<?php

use Illuminate\Database\Seeder;
use App\Wine;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wine::create([
            'name' => 'Classic Chianti',
            'description' => 'A medium-bodied wine characterized by a marvelous freshness with a lingering, fruity finish',
            'color' => 'red',
            'grape_variety' => 'Sangiovese',
            'country' => 'Italy'
        ]);
    }
}
