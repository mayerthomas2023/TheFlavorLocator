if (isset($_GET['query'])) 
    $search = $_GET['query'];

    // Database connection
    $pdo = new PDO("pgsql:host=ec2-34-236-100-103.compute-1.amazonaws.com;dbname=df7jav21pe862", "igdfndgbifihqx", "4e8923df29872b86da2cd47295c7ac3b9b2b1b9a8d61029e6c47ad0eb792f7c3");
    
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username LIKE :search");
    $stmt->execute(['search' => '%' . $search . '%']);

    // Fetch 
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
    echo '<p>' . htmlspecialchars($row['username']) . '</p>';
}