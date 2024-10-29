<?php

require __DIR__ . '/vendor/autoload.php';

/**
 * initialize the .env file
 */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * set db connection params
 */
$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];

/**
 * Connect to the DB using pdo
 */

$dsn = "pgsql:host={$host};port={$port};dbname={$dbname}";

try {
    /**
     * Create PDO instance
     */
    $pdo = new PDO($dsn, $user, $password);
    /**
     * Set PDO to throw exceptions on error
     */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_log("Connected to DB");
} catch (PDOException $e) {
    /**
     * If there is a connection error, catch it here
     */
    error_log("Connection failed: " . $e->getMessage());
}

/**
 * connect to the db using pg_connect
 */
// $connxnString = "host={$host} port={$port} dbname={$dbname} user={$user} password='nope'";
// $connxn = pg_connect($connxnString);

// if (!$connxn) {
//     die("Connection failed: " . pg_last_error());
//     error_log("connxn failed");
// } else {

//     error_log("connxn sucsfl");
// }