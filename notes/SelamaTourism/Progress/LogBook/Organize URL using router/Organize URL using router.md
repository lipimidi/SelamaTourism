Using only php makes the URL like SelamaTourism/index.php

so in order to make it easier or readable for people or SEO friendly, we create routes .
we also can make it route to a file without making the URL complicated


```php
// index.php
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Remove basePath from the request URI if it exists

if (strpos($requestUri, $basePath) === 0) {

    $requestUri = substr($requestUri, strlen($basePath));

    $requestUri = trim($requestUri, '/');

}

$requestMethod = $_SERVER['REQUEST_METHOD'];


// Define route functions 

function home()

{

    include('includes/server.php');

    include 'views/public/home.php';

}

  

function notFound($requestUri)

{

    http_response_code(404);

    echo "404 Not Found";

    // echo $requestUri;

  

}
// Route Definitions

$routes = [

    '' => 'home',

    'dashboard' => 'dashboard',

    'book' => 'book_1',

    'book/date' => 'book_1',

    'book/people' => 'book_2',

    'book/insurance' => 'book_3',

    'book/summary' => 'book_4',

    'login' => 'login',

    'register' => 'register',

];


if (isset($routes[$requestUri])) {

    call_user_func($routes[$requestUri]);

} else {

    notFound($requestUri);

}

```


We also need to create a .htaccess file so only index.php is accessible 

```
Options +FollowSymLinks
RewriteEngine On
 
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f
 
RewriteRule ^.*$ ./index.php
```