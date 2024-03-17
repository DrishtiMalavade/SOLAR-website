<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-info.css">
    <title>USER</title>
    
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Gloria+Hallelujah&family=Poppins:wght@300;600&display=swap');

@font-face {
    font-family: 'Dream Avenue';
    src: url('../homepage/Dream-Avenue.ttf') format('truetype');
}
    
*{
    background-color: black;
    color: aliceblue;
}

.head{
        text-align: center;
        padding: 50px;
        font-family: 'Dream Avenue'; 
    }

.message {
    background-color: aliceblue;
    color: black;
    font-family: 'Gloria Hallelujah', cursive;
    text-align: center;
    margin: 5% 20% 10%; /* Adjust the percentage values as needed */
    padding: 5%; /* You can also use percentage for padding */
    }

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    font-family: 'Dream Avenue';  
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: black;
    color: #fff;
    padding: 15px;
}

.brand {
    font-size: 1.5em;
}

.nav-links {
    display: flex;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    position: relative;
}

.nav-links a:after {
    content: '';
    display: block;
    height: 2px;
    width: 0;
    background-color: #fff;
    transition: width 0.3s;
}

.nav-links a:hover:after {
    width: 100%;
}

    </style>
    
</head>
<body>

<header class="navbar">
        <div class="brand">SOLAR</div>
        <nav class="nav-links">
            <a href="../homepage/index.html">Homepage</a>
            <a href="#">ID card</a>
            <a href="#">Booking details</a>
        </nav>
    </header>

    <?php
        session_start();
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
    ?>
            <H1 class="head">Welcome, <?php echo $username; ?></H1>
    <?php
        }
    ?>

    <div class="message">
        Hello Hello <?php echo $username; ?>!<br>
        we welcome you on this journey to the extraordinary <br>
        where you can go on a space expedition of your lifetime!<br>
        Below you will get your details<br>
        The crew wishes you good luck!<br>
        (This is a totally safe expedition with no safety hazards haha)<br><br>

        - Drishti Malavade (CEO SOLAR)

    </div>
    <div class="random">
       
    </div>

</body>
</html>
