<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user-info.css">
    <title>USER</title>

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
