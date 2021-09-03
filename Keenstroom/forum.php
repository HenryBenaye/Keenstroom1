<?php
session_start();
include 'header.php';
include 'config/forum/forum_server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/forum.css">
    <title>Forum Page</title>
</head>

<body>
    <main>
        <?php if (isset($_SESSION['user'])): ?>
            <div class="make_post">
                 <button class="trigger" class="make_post" type="submit" name="make_post"><i class="fas fa-plus"></i></button>
             </div>
         <?php endif; ?>

        <div class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                    <div class='postbox'>
                        <form class="createPost" action="forum.php" method="post">
                            <input type="text" name="post" placeholder="Your post.." maxlength="170">
                            <input class="rea" type="submit" name="create_post" value="Create post">
                        </form>
                    </div>
            </div>
        </div>

        <div class="allPosts">
            <?php foreach ($data as $row):?>
                <div class='post'>
                    <h1><?= $row['post'] ?></h1>
                    <div class='rea'><a id='responding_page' href='#'>Respond!</a></div>
                    <div class="name"><a> By: <?= $row['username'] ?></a></div>
                    <div class='like'>
                        <form action="forum.php" method="POST">
                            <i class='fas fa-heart'></i> <?= $row['user_like']; ?>
                            <button class="show" name="like_id" type="submit" value="<?= $row['id'] ?>">Like</button>
                        </form>
                    </div>
                    <div class='dislike'>
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <i class='fas fa-heart-broken'></i>  <?= $row['user_dislike'] ?>
                            <button class="show" name="dislike_id" type="submit" value="<?= $row['id'] ?>">Dislike</button>
                        </form>
                    </div>

                    <?php if (($_SESSION['user'] == 'ADMIN') || ($_SESSION['user'] == 'admin')):?>
                        <form action="forum.php" method="POST">
                            <button class="x" name="delete" type="submit" value="<?= $row['id'] ?>"><i class="fas fa-times-circle"></i></button>
                        </form>
                    <?php endif;?>

                </div>
            <?php endforeach; ?>
        </div>

    </main>
    <script>
    var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
        modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);

    </script>
</body>

</html>
