<?php

namespace Database\Seeders;

use App\Models\BookDetails;
use Illuminate\Database\Seeder;

class BookDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BookDetails::create([
            'book_id' => 1,
            'author' => 'Robert T. Kiyosaki',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2016,
            'description' => 'Rich Dad Poor Dad adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 2,
            'author' => 'Gege Akutami',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2021,
            'description' => 'Jujutsu kaisen adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 3,
            'author' => 'Anies Listyowati',
            'publisher' => 'Penerbit Erlangga',
            'year' => 2016,
            'description' => '(SERI ANAK SEHAT) ELA GONDONGAN adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 4,
            'author' => 'Valerie Willame',
            'publisher' => 'Bhuana Ilmu Populer',
            'year' => 2017,
            'description' => 'Mengenal Anak Hewan adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 5,
            'author' => 'Carl Sagan',
            'publisher' => 'Kepustakaan Populer Gramedia',
            'year' => 2017,
            'description' => 'Kosmos adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 6,
            'author' => 'KL Management',
            'publisher' => 'Bhuana Ilmu Populer',
            'year' => 2020,
            'description' => 'The Purloined Book adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 7,
            'author' => 'Kr. Pivari',
            'publisher' => 'Bhuana Ilmu Populer',
            'year' => 2020,
            'description' => 'Zinnie Oh Zinnie adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 8,
            'author' => 'Negi Haruba',
            'publisher' => 'Elex Media Komputindo',
            'year' => 2020,
            'description' => 'The Quintessential Quintuplets adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 9,
            'author' => 'Agnes Bemoe',
            'publisher' => 'Gramedia Widiasarana Indonesia',
            'year' => 2018,
            'description' => 'Kumpulan Cerita Rakyat Nusantara adalah blablabla'
        ]);
        BookDetails::create([
            'book_id' => 10,
            'author' => 'Larry Gonick',
            'publisher' => 'Kepustakaan Populer Gramedia',
            'year' => 2020,
            'description' => 'Kartun Fisika adalah blablabla'
        ]);
    }
}
