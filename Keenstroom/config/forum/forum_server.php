<?php
include 'config/database.php';

$username = "";
$post = "";

if (isset($_POST['create_post'])) {

    if (isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
    } else {
        $username = "Anonymous";
    }

    $post = $_POST['post'];
    $post = strip_tags($post);
    $post = htmlspecialchars($post);
    $post = htmlentities($post);

    $stmt = $pdo->prepare("SELECT post FROM posts WHERE post=?");
    $stmt->execute([$post]);
    $user_post = $stmt->fetch();
    if ($user_post) {
        echo "Post is already existing";
        header("location:forum.php");
        exit;
    }

    $sql = "INSERT INTO posts (username, post) VALUES ( ?, ?)";
    $pdo->prepare($sql)->execute([$username, $post]);

}
// Dit is het laten zien van alle posts
$data = $pdo->query("SELECT * FROM posts");

// Dit is alle likes en dislikes laten zien
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id=?");
$stmt->execute([$_POST['like_id']]);
$name = $stmt->fetchColumn();

if (isset($_POST['like_id']) || isset($_POST['dislike_id'])) {

    if(isset($_POST['like_id'])) {
        $query = $pdo->prepare( "UPDATE posts SET user_like = user_like + 1 WHERE id = :id");
        $query->execute(array(':id' => $_POST['like_id']));
    } else {
        $query = $pdo->prepare( "UPDATE posts SET user_dislike = user_dislike + 1 WHERE id = :id");
        $query->execute(array(':id' => $_POST['dislike_id']));
    }
    $data = $pdo->query("SELECT * FROM posts");
}

// Dit is de verwijder knop voor ADMIN

if(isset($_POST['delete'])) {

    $sql = "DELETE FROM posts WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_POST['delete'], PDO::PARAM_INT);
    $stmt->execute();

    $data = $pdo->query("SELECT * FROM posts");
}
