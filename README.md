# Book API

A simple Laravel 10+ API for managing books, including renting and returning functionality. This project follows the Repository & Service pattern and uses Laravel Form Requests for validation and Resource classes for consistent API responses.

---

## Requirements

- PHP 8.0+
- Composer
- MySQL
- Node.js & npm/yarn (if you use frontend integration)

---

## Installation

1. **Clone the repository**

git clone https://github.com/yourusername/book-api.git
cd book-api
composer install
yarn install

2. **Copy env files**

copy .env.example .env


3. **Set up db**

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password


3. **Migrate db and run php**

php artisan migrate

php artisan db:seed

php artisan serve


| Method | Endpoint                 | Description                                                          |
| ------ | ------------------------ | -------------------------------------------------------------------- |
| POST   | `/api/login`             | Authenticate a user (name + password)                                |
| GET    | `/api/books`             | Get a paginated list of books (filter by `author` or `availability`) |
| GET    | `/api/books/{id}`        | Get a single book by ID                                              |
| POST   | `/api/books`             | Create a new book                                                    |
| POST   | `/api/books/{id}/rent`   | Mark a book as rented                                                |
| POST   | `/api/books/{id}/return` | Mark a book as returned                                              |




