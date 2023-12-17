<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=stylenew.css>
    
    <title>ALL RECIPES</title>
</head>
<body>

    <div class="container">
        <h1>ALL RECIPES</h1>
        <div class="topnav">
            <a class="active" href="home.html">HOME</a>
            <a href="contactus.html"><span>CONTACT US</span>&emsp;</a>
            <a href="allrecipes.php"><span>ALL RECIPES</span>&emsp;</a>
            <a href="raterecipes.html"><span>RATE RECIPES</span>&emsp;</a>
            <a href="login.html"><span>LOGIN</span>&emsp;</a>
        </div>
        <form action="/search" method="GET">
            <label for="search"></label>
            <input type="text" id="search" name="q" placeholder="Enter your search term">
            <input type="submit" value="Search">
            
        </form>
        </body>
    
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL); 



    // Database 
    $pdo = new PDO("pgsql:host=ec2-34-236-100-103.compute-1.amazonaws.com;dbname=df7jav21pe862", "igdfndgbifihqx", "4e8923df29872b86da2cd47295c7ac3b9b2b1b9a8d61029e6c47ad0eb792f7c3");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve data 
    $stmt = $pdo->query("SELECT * FROM recipe_submissions");
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Loop through the results 
foreach ($recipes as $recipe): ?>
    <div class="recipe-box">
        <h2><?php echo htmlspecialchars($recipe['recipe_name'] ?? ''); ?></h2>
        <p><?php echo htmlspecialchars($recipe['ingredients'] ?? ''); ?></p>
        <p><?php echo htmlspecialchars($recipe['steps'] ?? ''); ?></p>
        <p><?php echo htmlspecialchars($recipe['additional_notes'] ?? ''); ?></p>
    </div>
<?php endforeach; ?>

