<?php

namespace App\Services;

use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class BookService
{
    protected BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * Get all books with optional filters.
     *
     * @param array $filters
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllBooks(array $filters = [])
    {
        return $this->bookRepository->getAll($filters);
    }

    /**
     * Create a new book.
     *
     * @param array $data
     * @return \App\Models\Book
     */
    public function createBook(array $data)
    {
        return $this->bookRepository->create($data);
    }

    /**
     * Get a book by ID.
     *
     * @param int $id
     * @return \App\Models\Book
     * @throws ModelNotFoundException
     */
    public function getBookById(int $id)
    {
        $book = $this->bookRepository->getById($id);

        if (!$book) {
            throw new ModelNotFoundException("Book not found");
        }

        return $book;
    }

    /**
     * Rent a book (mark as rented).
     *
     * @param int $id
     * @return \App\Models\Book
     * @throws ModelNotFoundException
     * @throws Exception
     */
    public function rentBook(int $id)
    {
        $book = $this->bookRepository->getById($id);

        if (!$book) {
            throw new ModelNotFoundException("Book not found");
        }

        if ($book->availability === 'rented') {
            throw new Exception("Book already rented", 400); // 400 Bad Request
        }

        return $this->bookRepository->updateAvailability($id, 'rented');
    }

    /**
     * Return a book (mark as available).
     *
     * @param int $id
     * @return \App\Models\Book
     * @throws ModelNotFoundException
     * @throws Exception
     */
    public function returnBook(int $id)
    {
        $book = $this->bookRepository->getById($id);

        if (!$book) {
            throw new ModelNotFoundException("Book not found");
        }

        if ($book->availability === 'available') {
            throw new Exception("Book already available", 400);
        }

        return $this->bookRepository->updateAvailability($id, 'available');
    }
}


