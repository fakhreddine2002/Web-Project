<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
            // Connect to the database
            $pdo = new PDO($dsn, $username, $password, $options);

            // Retrieve email and password from the form
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Check if user exists and password is correct
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // User authenticated, send welcome email
                echo "<p>Welcome email sent!</p>";
            } else {
                echo "<p>Invalid email or password.</p>";
            }
        } catch (PDOException $e) {
            echo "<p>Connection failed: " . $e->getMessage() . "</p>";
        }
    }
    ?>
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>
    <div class="container" id="container">
        <form method="post" action="login.php">
            <h1>Log In To Your Account</h1>
            <span>Use your mail to login</span>
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">LOG IN</button>
        </form>
        <div class="left">
            <h1>Welcome to 3allemni!</h1>
            <p>With us, you will guarantee your success. If it's your first time, you can sign up now.</p>
            <button>Sign in</button>
        </div>
    </div>
    <div class="encouraging-words">
        <p>Don't give up on your dreams.</p>
    </div>
</body>
</html>
