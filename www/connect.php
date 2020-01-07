<?php
$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

echo "host=$host,user=$user,pass=$pass";
 
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
 
echo 'Successful database connection!'.PHP_EOL;
?>