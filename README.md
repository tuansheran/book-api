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


3. **Set up db by copying env variables**

        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=base64:00paNsIWqAvx3uYIRrR0ijmahWuW6SJvSPPTh07LyKc=
        APP_DEBUG=true
        APP_URL=http://localhost
        
        LOG_CHANNEL=stack
        LOG_DEPRECATIONS_CHANNEL=null
        LOG_LEVEL=debug
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=book_dashboard
        DB_USERNAME=root
        DB_PASSWORD=
        
        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        FILESYSTEM_DISK=local
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=file
        SESSION_LIFETIME=120
        
        MEMCACHED_HOST=127.0.0.1
        
        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379
        
        MAIL_MAILER=smtp
        MAIL_HOST=mailpit
        MAIL_PORT=1025
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS="hello@example.com"
        MAIL_FROM_NAME="${APP_NAME}"
        
        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=
        AWS_USE_PATH_STYLE_ENDPOINT=false
        
        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_HOST=
        PUSHER_PORT=443
        PUSHER_SCHEME=https
        PUSHER_APP_CLUSTER=mt1
        
        VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        VITE_PUSHER_HOST="${PUSHER_HOST}"
        VITE_PUSHER_PORT="${PUSHER_PORT}"
        VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
        VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


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




