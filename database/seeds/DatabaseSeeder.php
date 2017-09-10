<?php

use Illuminate\Database\Seeder;
use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BooksTableSeeder::class);
    }
}

class BooksTableSeeder extends Seeder {
  
    public function run() {
        DB::table('books')->delete();

        Book::create(['title' => "Alice's Adventures in Wonderland", 'author' => 'Lewis Caroll']);
        Book::create(['title' => 'Through the Looking Glass', 'author' => 'Lewis Caroll']);
        Book::create(['title' => 'The History of the Decline and Fall of the Roman Empire', 'author' => 'Edward Gibbon']);
        Book::create(['title' => 'Beyond Good and Evil', 'author' => 'Friedrich Nietzsche']);
    }
}