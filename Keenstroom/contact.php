<?php
include 'header.php';
include 'config/database.php';
include 'config/contact/contact_server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Contact us!</title>
</head>

<body>
    <main>
        <div class="info">
            <div class="infomakers">
                <div class="def" id="def1">
                    <img src="images/persons/anouar.png" alt="">
                    <div class="rijen">
                        <h1>CEO - Anouar</h1>
                        <span>Email: Anouar@redgame.nl</span>
                        <span>Number: 06 12345678910</span>
                        <span class="meerinfo" id="anouar">More info</span>
                        <div id="anouar-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeAnouar" class="close">&times;</span>
                                <p>
                                    My name is Anouar el Ghazaoui and I am 18 years old. I am a student at the ROC Amstelland and the Bit Academy.<br>
                                    I'm learning Software Development and I am in my first year.<br>
                                    Besides programming I also like to hang out with my friends and do all kinds of stuff like going to the movies, going out for dinner or playing soccer!<br>
                                    I like to design and program application's, a passion that I have is that I like to learn more and try new things.<br>
                                    I'm always open for new idea's and inspiration. <br>
                                    I also do some programming in my free time where I am learning and working on a new programming language.<br>
                                    Im working with the next programming languages:<br>
                                    - HTML & CSS<br>
                                    - JavaScript<br>
                                    - PHP<br>
                                    - MySQL<br><br>
                                    Extra:<br>
                                    - C#
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def2">
                    <img src="images/persons/youp.png" alt="">
                    <div class="rijen">
                        <h1>CEO - Youp</h1>
                        <span>Email: Youp@redgame.nl</span>
                        <span>Number: 06 12345678910</span>
                        <span class="meerinfo" id="youp">More info</span>
                        <div id="youp-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeYoup" class="close">&times;</span>
                                <p>
                                    Im in my first year of programming at RocvA/BIT Academy as a software developer.
                                    From day one up untill now I have been in love with the concept of writing a few lines of code to then see a website start to form from those pieces of code.
                                    Id love to see my self grow in this field and to achieve something great. Maybe I can even start my own business.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def3">
                    <img src="images/persons/mark.png" alt="">
                    <div class="rijen">
                        <h1>COO - Mark</h1>
                        <span>Email: Mark@redgame.nl</span>
                        <span>Number: 06 1234567810</span>
                        <span class="meerinfo" id="mark">More info</span>
                        <div id="mark-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeMark" class="close">&times;</span>
                                <p>
                                    Hallo, mijn naam is Mark Verrips en ik ben 17 jaar oud, een eerste jaar student die graag games speelt, piano speelt, programmeert en tafeltennist. <br>
                                    Programmeren vind ik super leuk en zou later graag een baan willen krijgen in het vlak van ict! <br>
                                    Als ambitieuze student aan de Bit Academy ben ik op zoek naar een stageplaats als Software Developer. <br>
                                    Mijn interesse gaat vooral uit naar stages gericht op front end development.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="def" id="def4">
                    <img src="images/persons/daan.png" alt="">
                    <div class="rijen">
                        <h1>COO - Daan</h1>
                        <span>Email: Daan@redgame.nl</span>
                        <span>Number: 06 12345678910</span>
                        <span class="meerinfo" id="daan">More info</span>
                        <div id="daan-modal" class="modal">
                            <div class="modal-content">
                                <span id="closeDaan" class="close">&times;</span>
                                <p>
                                    Hallo, mijn naam is Daan Broekhuizen en ik ben 17 jaar oud. <br>
                                    Ik ben een zeer enthousiaste, hardwerkende jongenman die veel inzet toont, ik sta altijd open voor verbetering en feedback van anderen. <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="contactform">
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Name" >
                    <input type="email" name="email" placeholder="E-mail" >
                    <input type="text" name="select" placeholder="State the problem">
                    <textarea name="onderwerp" placeholder="Discription..." rows="13" cols="120"></textarea>
                    <input id="send" name="send" class="send" type="submit" value="submit">
                </form>
            </div>
        </div>

        <?php
        include 'config/contact/contact_errors.php';
        if (isset($_POST['send'])) {
            if (count($errors) == 0) {
                echo '<div class="done">';
                echo '<p>Your problem was send!</p>';
                echo '</div>';
            }
        }
        ?>
    </main>
    <script>
        var Amodal = document.getElementById("anouar-modal");
        var Ymodal = document.getElementById("youp-modal");
        var Mmodal = document.getElementById("mark-modal");
        var Dmodal = document.getElementById("daan-modal");

        var span = document.getElementsByClassName("close")[0];

        anouar.onclick = function() {
            Amodal.style.display = "block";
        }
        youp.onclick = function() {
            Ymodal.style.display = "block";
        }
        mark.onclick = function() {
            Mmodal.style.display = "block";
        }
        daan.onclick = function() {
            Dmodal.style.display = "block";
        }

        closeAnouar.onclick = function() {
            Amodal.style.display = "none";
        }
        closeYoup.onclick = function() {
            Ymodal.style.display = "none";
        }
        closeMark.onclick = function() {
            Mmodal.style.display = "none";
        }
        closeDaan.onclick = function() {
            Dmodal.style.display = "none";
        }

        window.addEventListener("click", function(event) {
            if (event.target == Amodal) {
                Amodal.style.display = "none";
                exit;
            }

        });
        window.addEventListener("click", function(event) {
            if (event.target == Ymodal) {
                Ymodal.style.display = "none";
                exit;
            }

        });
        window.addEventListener("click", function(event) {
            if (event.target == Mmodal) {
                Mmodal.style.display = "none";
                exit;
            }

        });
        window.onclick = function(event) {
            if (event.target == Dmodal) {
                Dmodal.style.display = "none";
                exit;
            }
        }
    </script>
</body>

</html>
