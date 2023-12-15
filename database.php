<?php $pdo = new PDO("pgsql:host=ec2-34-236-100-103.compute-1.amazonaws.com;dbname=df7jav21pe862", "igdfndgbifihqx", "4e8923df29872b86da2cd47295c7ac3b9b2b1b9a8d61029e6c47ad0eb792f7c3");
$stmt = $pdo->prepare("INSERT INTO recipe_submissions (recipe_name, ingredients, steps, additional_notes) VALUES (:recipe_name, :ingredients, :steps, :additional_notes)");
$stmt->execute([
    'recipe_name' => $recipeName,
    'ingredients' => $ingredients,
    'steps' => $steps,
    'additional_notes' => $additionalNotes
]);
$stmt = $pdo->query("SELECT * FROM recipe_submissions");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // process each row
}
