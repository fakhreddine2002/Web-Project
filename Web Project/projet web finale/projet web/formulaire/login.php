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
    session_start();

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
            
            $pdo = new PDO($dsn, $username, $password, $options);

            
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
               
                header("Location: ..\opening and acceuille\opening.html");
                exit();
            } else {
                $error = "Invalid email or password.";
            }
        } catch (PDOException $e) {
            $error = "Connection failed: " . $e->getMessage();
        }
    }
    ?>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
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
            <a href="signin.php"><button>Sign in</button></a>
        </div>
    </div>+
    <div class="encouraging-words">
        <p>Don't give up on your dreams.</p>
    </div>
</body>
</html>
