<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <div class="nav">
            <div class="navimg">
                <a href="index.php"><img src='images/logo/cover1.png' alt="cover-logo"></a>
            </div>

            <div class="navbar">
                <nav class="bar">
                    <a href="index.php"><i class="fas fa-home"></i><span class="responsiveremove"> HOME</span></a>
                    <a href="games.php"><i class="fas fa-gamepad"></i><span class="responsiveremove"> GAMES</span></a>
                    <a href="forum.php"><i class="fas fa-sticky-note"></i><span class="responsiveremove"> FORUM</span></a>


                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '<a href="profile.php"><i class="fas fa-user-circle"></i> PROFILE</a>';
                    } else {
                        echo '<a href="log-in.php"><i class="fas fa-sign-in-alt"></i><span class="responsiveremove"> LOG-IN</span></a>';
                    }
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <script src="https://kit.fontawesome.com/82664ff85a.js" crossorigin="anonymous"></script>
</body>

</html>
