<p> Api </p>

<p>
    Requrements:
    <ul>
    <li>Php 8+ </li>
    <li> Composer</li>
    </ul>
</p>
<h2>Deployment:</h2>

Create dependencies using composer
```
cd path/to/repository
composer dumpautoload
```
Rename .env.example to .env and insert database configuration
```
DB_CONNECTION=mysql
DB_HOST=localhost   
DB_PORT=3306
DB_DATABASE=book_api
DB_USERNAME=root
DB_PASSWORD=secret
```

