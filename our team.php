<?php
session_start();
include ('koneksi.php');


if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BookZen</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap' rel='stylesheet'>
</head>

<body>

    <nav>
        <div class="top">
            <div class="judul"><a href='index.php'>BookZen</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="booklist.php">Book List</a></li>
                    <li><a href="our team.php">Our Team</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="tengah">
        <h2><br>Our Team</h2>
    </div>

    <section>
        <div class="row">

          
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="CalvinWowiling.jpg" alt="Calvin Wowiling" />
                    </div>
                    <h3>Calvin Wowiling</h3>
                    <p>Team Lead</p>
                </div>
            </div>

          
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="LeonyWahani.jpg" alt="Leony Wahani" />
                    </div>
                    <h3>Leony Wahani</h3>
                    <p>Project Lead</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="AndreMintje.jpg" alt="Andre Mintje" />
                    </div>
                    <h3>Andre Mintje</h3>
                    <p>Front end</p>
                </div>
            </div>

           
            <div class="column">
                <div class="card">
                    <div class="img-container">
                        <img src="EidenLukas.jpg" alt="Eiden Lukas" />
                    </div>
                    <h3>Eiden Lukas</h3>
                    <p>Front end</p>
                </div>
            </div>

        </div>
    </section>

    <div id="copyright">
        <div class="top">
            &copy; 2024. <b>Team - BookZen</b> All Rights Reserved.
        </div>
    </div>

</body>
</html>
