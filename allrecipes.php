<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=style3.css>
    <title>ALL RECIPES</title>
</head>
<body>

    <div class="container">
        <h1>ALL RECIPES</h1>
        <div class="topnav">
            <a class="active" href="index.html">HOME</a>
            <a href="contactus.html"><span>CONTACT US</span>&emsp;</a>
            <a href="allrecipes.html"><span>ALL RECIPES</span>&emsp;</a>
            <a href="raterecipes.html"><span>RATE RECIPES</span>&emsp;</a>
            <a href="login.html"><span>LOGIN</span>&emsp;</a>
        </div>
        <form action="/search" method="GET">
            <label for="search"></label>
            <input type="text" id="search" name="q" placeholder="Enter your search term">
            <input type="submit" value="Search">
            
        </form>
        </body>
<?php>       
 
    $stmt = $pdo->query("SELECT * FROM recipe_submissions");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    



