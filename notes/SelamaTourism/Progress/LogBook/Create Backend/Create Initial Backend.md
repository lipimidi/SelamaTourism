### Create backend for website by creating 3 files in include and index.php for the 1st page


##### server.php 

> [!NOTE] 
>main page for backend , which means all the backend goes through here first
may add more functions later


```php
  
require 'settings.php';

  

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');

$dotenv->load();

  
  
  

 require('database.php') ;
```


##### settings.php 


> [!NOTE]
> page for settings mainly used for timezone and managing base URL
> because in localhost it uses the same host for all web server  


```php
  
$is_local = ($_SERVER['HTTP_HOST'] === 'localhost');

  
// Set the correct base path

$basePath = $is_local ? 'SelamaTourism' : ''; // Local subfolder, empty for production

$basePath2 = $is_local ? '/SelamaTourism' : ''; // Local subfolder with slash, empty for production

$basePath = $is_local ? '/SelamaTourism' : '' ;

date_default_timezone_set('Asia/Kuala_Lumpur');
  

 require('database.php') ;
```


##### database.php 


> [!NOTE]
> page for managing connections with the database details ( password, username ,host, database name)


```php
  
$conn = mysqli_connect($_ENV['host'], $_ENV['user'], $_ENV['pass'], $_ENV['database5']);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
```