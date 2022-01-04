<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::create([
            'category_id' => 1,
            'title' => 'Rich Dad Poor Dad'
        ]);
        Book::create([
            'category_id' => 2,
            'title' => 'Jujutsu Kaisen'
        ]);
        Book::create([
            'category_id' => 3,
            'title' => '(SERI ANAK SEHAT) ELA GONDONGAN'
        ]);
        Book::create([
            'category_id' => 4,
            'title' => 'Mengenal Anak Hewan'
        ]);
        Book::create([
            'category_id' => 5,
            'title' => 'Kosmos'
        ]);
        Book::create([
            'category_id' => 6,
            'title' => 'The Purloined Book'
        ]);
        Book::create([
            'category_id' => 7,
            'title' => 'Zinnie Oh Zinnie'
        ]);
        Book::create([
            'category_id' => 8,
            'title' => 'The Quintessential Quintuplets'
        ]);
        Book::create([
            'category_id' => 9,
            'title' => 'Kumpulan Cerita Rakyat Nusantara'
        ]);
        Book::create([
            'category_id' => 10,
            'title' => 'Kartun Fisika'
        ]);
    }
}
