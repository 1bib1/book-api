<p> Simple API to store name and author of a book.
<br/> You can Create/update/list/delete books using an API. 
</p>
<p>
    Requirements:
    <ul>
    <li>Php 8+ </li>
    <li>Composer</li>
    </ul>
</p>
<h2>Deployment:</h2>

<<<<<<< HEAD
Create Laravel dependencies using composer
```
cd path/to/repository
composer update
```

Make sure all dependencies are properly set
```
composer dump-autoload
```

Rename .env.example to .env and edit database configuration (example):
```
DB_CONNECTION=mysql
DB_HOST=localhost   
DB_PORT=3306
DB_DATABASE=book_api
DB_USERNAME=root
DB_PASSWORD=secret
```

Run database migrations:
```
php artisan migrate
```

Start webserver server (you can select port you like):
```
php artisan serve --port 8000
```
<h2>How does it work?</h2>
Application supports two fields: Name (required) and author (can be left blank).<br/>
You can list all books, list one book, add, update and delete book

API returns json of books when listing.

ADD/UPDATE/DELETE response:
> 1 if success

> 0 if fail

<h2>Example of use in local env.</h2>

List all books (GET METHOD):
> 127.0.0.1:8000/api/books

List one book (GET METHOD):
> 127.0.0.1:8000/api/books/id

Add book (POST METHOD):
> 127.0.0.1:8000/api/books/id?name=Something?author=Daft

Update book (PUT METHOD):
> 127.0.0.1:8000/api/books/id?name=SomethingElse?author=Code

=======
Create dependencies using composer
```
cd path/to/repository
composer update
composer dumpautoload
```
Rename .env.example to .env and edit database configuration (example):
```
DB_CONNECTION=mysql
DB_HOST=localhost   
DB_PORT=3306
DB_DATABASE=book_api
DB_USERNAME=root
DB_PASSWORD=secret
```

Run database migrations:
```
php artisan migrate
```

Start webserver server (you can select port you like):
```
php artisan serve --port 8000
```
<h2>How does it work?</h2>
Application supports two fields: Name (required) and author (can be left blank).<br/>
You can list all books, list one book, add, update and delete book

API returns json of books when listing.

ADD/UPDATE/DELETE response:
> 1 if success

> 0 if fail

<h2>Example of use in local env.</h2>

List all books (GET METHOD):
> 127.0.0.1:8000/api/books

List one book (GET METHOD):
> 127.0.0.1:8000/api/books/id

Add book (POST METHOD):
> 127.0.0.1:8000/api/books/id?name=Something?author=Daft

Update book (PUT METHOD):
> 127.0.0.1:8000/api/books/id?name=SomethingElse?author=Code

>>>>>>> c684c1d1dbe06db31e95c205a7d7615021dddc00
Delete book (DELETE METHOD):
> 127.0.0.1:8000/api/books/id 
