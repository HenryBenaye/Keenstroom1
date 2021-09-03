<?php
include 'config/database.php';

$username = "";

if(isset($_POST['delete'])) {

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_POST['delete'], PDO::PARAM_INT);
    $stmt->execute();
}

if (isset($_POST['search'])) {
    $username = $_POST['username'];

    $username = htmlspecialchars($username);

    $stmt = $pdo->prepare('SELECT id,username,email FROM users WHERE username = ? OR email = ?');
    $stmt->execute([$username, $username]);
    $check = $stmt->fetch();
}

elseif (isset($_POST['all'])) {
    $data = $pdo->query("SELECT * FROM users")->fetchAll();
}

?>
