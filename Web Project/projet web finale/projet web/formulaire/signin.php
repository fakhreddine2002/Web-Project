<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if (isset($_POST['Nom'], $_POST['Prenom'], $_POST['email'], $_POST['password'], $_POST['Adresse'], $_POST['CodePostal'], $_POST['Ville'])) {
        // All fields are set, proceed with form submission
        $host = 'localhost';
        $dbname = 'database';
        $username = 'root';
        $password = '';

        // DSN - Data Source Name
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $pdo = new PDO($dsn, $username, $password, $options);
            $nom = $_POST['Nom'];
            $prenom = $_POST['Prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $adresse = $_POST['Adresse'];
            $codePostal = $_POST['CodePostal'];
            $ville = $_POST['Ville'];

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare the SQL statement
            $stmt = $pdo->prepare("INSERT INTO users (nom, prenom, email, password, adresse, codepostal, ville) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $email, $hashedPassword, $adresse, $codePostal, $ville]);

            // Send email to the user
            $to = $email;
            $subject = 'Welcome to our platform';
            $message = "Dear $prenom $nom,\n\nThank you for signing up on our platform. We are excited to have you on board!";
            $headers = 'From: mohamedissaoui2468@gmail.com' . "\r\n" .
                'Reply-To: mohamedissaoui2468@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            // Send email
            if (mail($to, $subject, $message, $headers)) {
                // Display success message
                echo "<p>User registered successfully. You will be redirected to the login page shortly.</p>";

                // Redirect to login page after 2 seconds
                header("refresh:2; url=login.php");
                exit; // Stop further execution
            } else {
                // Email sending failed
                echo "<p>Email sending failed. Please try again later.</p>";
            }
        } catch (PDOException $e) {
            echo "<p>Connection failed: " . $e->getMessage() . "</p>";
        }
    } else {
        // Not all fields are set, display error message
        echo "<p>Please fill in all fields.</p>";
    }
}
?>


    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <div class="container">
        <div class="contactform">
            <form action="" method="POST">
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <table>
                        <tr>
                            <td><label for="Nom">Nom:</label></td>
                            <td><input id="Nom" name="Nom" type="text"><br></td>
                        </tr>
                        <tr>
                            <td><label for="Prenom">Prenom:</label></td>
                            <td><input id="Prenom" name="Prenom" type="text"><br></td>
                        </tr>
                        <tr>
                            <td><label for="email">E-mail:</label></td>
                            <td><input id="email" name="email" type="text"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Mot de passe:</label></td>
                            <td><input id="password" name="password" type="password"><br></td>
                        </tr>
                        <tr>
                            <td><label for="Adresse">Adresse:</label></td>
                            <td><input id="Adresse" name="Adresse" type="text"><br></td>
                        </tr>
                        <tr>
                            <td><label for="CodePostal">Code Postal:</label></td>
                            <td><input id="CodePostal" name="CodePostal" type="text"><br></td>
                        </tr>
                        <tr>
                            <td><label for="Ville">Ville:</label></td>
                            <td><input id="Ville" name="Ville" type="text"></td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Informations sur l'éducation</legend>
                    <label>Spécialité</label>
                    <select name="menu">
                        <option>NONE</option>
                        <option>Techno</option>
                        <option>MP</option>
                        <option>PC</option>
                        <option>BG</option>
                    </select><br><br><br>
                    <label>Niveau d'étude</label>
                    <select name="menu">
                        <option>1</option>
                        <option>2</option>
                    </select><br><br><br>
                </fieldset>
                <center>
                    <button type="submit">Sign in</button>
                </center>
            </form>
        </div>
    
</body>
</html>
