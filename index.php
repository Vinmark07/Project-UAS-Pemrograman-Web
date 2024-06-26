<?php 
    session_start();

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

    <div class="top">
        <section id="home">
            <div class="page1left">
                <h2>BookZen</h2>
                <p>"Reading Calmly, Living Wisely"</p>
                <br>
                <p><a href="booklist.php" class="tombol1">Let's get started</a></p>
            </div>
            <div class="page1right">
                <img src="gambar.jpg" alt="" width="630" height="600">
            </div>
        </section> 

        <div class="tengah">
            <div class="container" id="container">
                <button id="button-logout" class="buttonlog">Logout</button>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const buttonLogout = document.getElementById('button-logout');
                        buttonLogout.addEventListener('click', function () {
                            localStorage.removeItem('logged-in');
                            window.location.href = 'login.php';
                        });
                    });
                </script>


    <div id="copyright">
        <div class="top">
            &copy; 2024. <b>Team - BookZen</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>
