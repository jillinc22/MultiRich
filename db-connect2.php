<?php
$dsn = 'mysql:host=localhost;dbname=multirich_db';
$username = 'root';
$password = '';
$options = [];

try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
// set the fetched data to object
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// something like LIMIT
// $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);