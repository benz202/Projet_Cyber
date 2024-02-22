<?php
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_cyber";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if (isset($_POST['token']) && hash_equals($_SESSION['token'], $_POST['token'])) {
    if (isset($_POST['ok'])) {
        $password = $_POST['password']; 
        $confirme = $_POST['confirme'];

        if ($password !== $confirme) {
            echo htmlentities('Passwords do not match. Please try again.');
        } else {
            $checkEmailQuery = $conn->prepare("SELECT COUNT(*) AS count FROM user WHERE email = :email");
            $checkEmailQuery->execute([':email' => $email]);
            $emailExists = $checkEmailQuery->fetch(PDO::FETCH_ASSOC)['count'];

            if ($emailExists > 0) {
                echo htmlentities('E-mail exist. Try again.');
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $insertQuery = $conn->prepare("INSERT INTO user (email, password) VALUES (:email, :password)");
                $insertQuery->execute([
                    ':email' => $email,
                    ':password' => $hashedPassword
                ]);
                header("Location: connexion.php");
                exit();
            }
        }
    } elseif (isset($_POST['reset'])) {
                $pseudo = $nom = $prenom = $email = $password = '';
                //echo 'Formulaire réinitialisé!';
    }
}else {
   die("Erreur de sécurité CSRF.");
}
?>
