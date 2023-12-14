<?php include_once("home.html"); ?>
$connString = "host=$ec2-3-232-218-211.compute-1.amazonaws.com port=$5432 dbname=$d7044m9719erbv user=$dgwwsjmrrjnwfm password=$5b51472a52ea04594728c9c42b19ab4ed575f2778cdf20ab4a21884c9352cbae";
$conn = pg_connect($connString);

if (!$conn) {
    die("Error in connection: " . pg_last_error());
}
