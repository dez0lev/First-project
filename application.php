<?php
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $message = trim(filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($username) < 2) {
        echo "Login error";
        exit;
    }

    if (strlen($email) < 4 && !str_contains($email, '@')) {
        echo "Email error";
        exit;
    }


// DB

try
    {    
$pdo = new PDO('mysql:host=localhost; dbname=applications; port=3306', 'root', 'mysql');
    }
    catch (PDOException $e)
    {
        echo $e;
    }


// INSERT

$sql = 'INSERT INTO users(username, email, message) VALUES(?, ?, ?)';
$query = $pdo -> prepare($sql);
$query -> execute([$username, $email, $message]);

header("Location: zayavka.php");
