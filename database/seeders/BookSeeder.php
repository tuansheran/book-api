<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Atomic Habits', 'author' => 'James Clear', 'published_date' => '2018-10-16', 'availability' => 'available'],
            ['title' => 'The 7 Habits of Highly Effective People', 'author' => 'Stephen R. Covey', 'published_date' => '1989-08-15', 'availability' => 'available'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'published_date' => '1960-07-11', 'availability' => 'available'],
            ['title' => '1984', 'author' => 'George Orwell', 'published_date' => '1949-06-08', 'availability' => 'available'],
            ['title' => 'The Alchemist', 'author' => 'Paulo Coelho', 'published_date' => '1988-05-01', 'availability' => 'available'],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'published_date' => '1951-07-16', 'availability' => 'available'],
            ['title' => 'The Power of Habit', 'author' => 'Charles Duhigg', 'published_date' => '2012-02-28', 'availability' => 'available'],
            ['title' => 'Thinking, Fast and Slow', 'author' => 'Daniel Kahneman', 'published_date' => '2011-10-25', 'availability' => 'available'],
            ['title' => 'The Subtle Art of Not Giving a F*ck', 'author' => 'Mark Manson', 'published_date' => '2016-09-13', 'availability' => 'available'],
            ['title' => 'Sapiens: A Brief History of Humankind', 'author' => 'Yuval Noah Harari', 'published_date' => '2011-01-01', 'availability' => 'available'],
            ['title' => 'Educated', 'author' => 'Tara Westover', 'published_date' => '2018-02-20', 'availability' => 'available'],
            ['title' => 'Becoming', 'author' => 'Michelle Obama', 'published_date' => '2018-11-13', 'availability' => 'available'],
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling', 'published_date' => '1997-06-26', 'availability' => 'available'],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'published_date' => '1937-09-21', 'availability' => 'available'],
            ['title' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'published_date' => '1954-07-29', 'availability' => 'available'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'published_date' => '1925-04-10', 'availability' => 'available'],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'published_date' => '1813-01-28', 'availability' => 'available'],
            ['title' => 'Jane Eyre', 'author' => 'Charlotte Brontë', 'published_date' => '1847-10-16', 'availability' => 'available'],
            ['title' => 'The Da Vinci Code', 'author' => 'Dan Brown', 'published_date' => '2003-03-18', 'availability' => 'available'],
            ['title' => 'Angels & Demons', 'author' => 'Dan Brown', 'published_date' => '2000-05-01', 'availability' => 'available'],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}

