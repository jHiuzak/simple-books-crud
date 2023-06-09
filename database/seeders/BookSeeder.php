<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Sequence;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $predefinedValues = [
                [
                    'name' => '1984',
                    'cover' => '1984.jfif',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Harry Potter and the Philosopher\'s Stone',
                    'cover' => 'harry_potter_and_the_philosophers_stone.jfif',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Lord of the Flies',
                    'cover' => 'lord_of_the_flies.jfif',
                    'user_id' => 1,
                ],
                [
                    'name' => 'Resident Evil: The Umbrella Conspiracy',
                    'cover' => 'resident_evil_the_umbrella_conspiracy.jpg',
                    'user_id' => 1,
                ],
                [
                    'name' => 'The Hobbit',
                    'cover' => 'the_hobbit.jfif',
                    'user_id' => 1,
                ]
            ];

            Book::Factory()
                ->count(5)
                ->state(new Sequence(...$predefinedValues))
                ->create();
        });
    }
}
