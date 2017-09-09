<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Author;

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

        $author = Author::create(['name' => 'Lewis Caroll']);
        $book = Book::create(['name' => 'Alice in Wonderland']);
        $book->authors()->attach($author->id);
        
        $book = Book::create(['name' => 'Through the Looking Glass']);
        $book->authors()->attach($author->id);
        
        $book = Book::create(['name' => 'The History of the Decline and Fall of the Roman Empire']);
        $author = Author::create(['name' => 'Edward Gibbon']);
        $book->authors()->attach($author->id);
        
        $book = Book::create(['name' => 'Beyond Good and Evil']);
        $author = Author::create(['name' => 'Friedrich Nietzsche']);
        $book->authors()->attach($author->id);
    }
}