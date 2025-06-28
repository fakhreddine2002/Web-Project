<?php
$host = 'localhost'; // or your host
$dbname = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

// DSN - Data Source Name
$connect = "mysql:host=$host;dbname=$signindb;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // turn on errors in the form of exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // make the default fetch be an associative array
    PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connected successfully";

    // Place your form handling code here
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Assuming you're checking for form submission
        $nom = $_POST['Nom'] ?? '';
        $prenom = $_POST['Prenom'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $adresse = $_POST['Adresse'] ?? '';
        $cp = $_POST['Code Postal'] ?? '';
        $ville = $_POST['Ville'] ?? '';
        $nivEtude = $_POST['menu'] ?? '';
        $specialite = $_POST['specialite'] ?? '';

        // Example of preparing a statement
        $stmt = $pdo->prepare("INSERT INTO etudiant(nom, prenom, email, password, adresse, cp, ville, nivEtude, specialite) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nom, $prenom, $email, $password, $adresse, $cp, $ville, $nivEtude, $specialite]);
        echo "Inscription effectuée avec succès";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>