<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Resources\BookResource;
use App\Services\BookService;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    // GET /api/books
    public function index(Request $request)
    {
        try {
            $filters = $request->only(['author', 'availability']);
            $books = $this->bookService->getAllBooks($filters);
            return BookResource::collection($books);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to fetch books', 'error' => $e->getMessage()], 500);
        }
    }

    // POST /api/books
    public function store(StoreBookRequest $request)
    {
        try {
            $book = $this->bookService->createBook($request->validated());
            return new BookResource($book);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create book', 'error' => $e->getMessage()], 500);
        }
    }

    // GET /api/books/{id}
    public function show($id)
    {
        try {
            $book = $this->bookService->getBookById($id);
            return new BookResource($book);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Book not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to fetch book', 'error' => $e->getMessage()], 500);
        }
    }

    // POST /api/books/{id}/rent
    public function rent($id)
    {
        try {
            $book = $this->bookService->rentBook($id);
            return new BookResource($book);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Book not found'], 404);
        } catch (\Exception $e) {
            $status = $e->getCode() ?: 400;
            return response()->json(['message' => $e->getMessage()], $status);
        }
    }

    // POST /api/books/{id}/return
    public function return($id)
    {
        try {
            $book = $this->bookService->returnBook($id);
            return new BookResource($book);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Book not found'], 404);
        } catch (\Exception $e) {
            $status = $e->getCode() ?: 400;
            return response()->json(['message' => $e->getMessage()], $status);
        }
    }
}


