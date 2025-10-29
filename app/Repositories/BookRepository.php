<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    public function getAll($filters = [])
    {
        $query = Book::query();

        // Optional filters (author, availability)
        if (!empty($filters['author'])) {
            $query->where('author', 'LIKE', '%' . $filters['author'] . '%');
        }

        if (!empty($filters['availability'])) {
            $query->where('availability', $filters['availability']);
        }

        return $query->paginate(10); // pagination
    }

    public function create(array $data)
    {
        return Book::create($data);
    }

    public function getById($id)
    {
        return Book::find($id);
    }

    public function updateAvailability($id, $status)
    {
        $book = Book::findOrFail($id);
        $book->availability = $status;
        $book->save();
        return $book;
    }

}
