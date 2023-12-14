<?php include_once("home.html"); ?>

$dbUrl = getenv("DATABASE_URL");

if ($dbUrl) {
    $urlParts = parse_url($dbUrl);
    $host = $urlParts['host'];
    $username = $urlParts['user'];
    $password = $urlParts['pass'];
    $port = $urlParts['port'];
    $dbname = ltrim($urlParts['path'], '/');
   
} else {
    die("Database configuration error: 'DATABASE_URL' is not set.");
}
$connString = "host=$ec2-3-232-218-211.compute-1.amazonaws.com port=$5432 dbname=$d7044m9719erbv user=$dgwwsjmrrjnwfm password=$5b51472a52ea04594728c9c42b19ab4ed575f2778cdf20ab4a21884c9352cbae";
$conn = pg_connect($connString);

if (!$conn) {
    die("Error in connection: " . pg_last_error());
}
