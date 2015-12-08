<!DOCTYPE html>
<html lang="en">
<?php
include "header.html";
?>
<body>
<div class="container-fluid">
<div id ="top">
    <a href="#"><img src="img/fb-logo.png" alt="Facebook Logo"></a>
    <a href="#"><img src="img/ig-logo.png" alt="Instagram Logo"></a>
    <a href="#"><img src="img/twitter-logo.png" alt="twitter logo"></a>
</div>
    <div id="jumbo">
        <img id="logo" class="center-block" src="img/longshot-logo.png" alt="Longshot Brewing Logo">
    </div>
        <nav>
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation"><a href="about.php">About Us</a></li>
            <li role="presentation"><a href="beers.php">Beers</a></li>
            <li role="presentation"><a href="menu.php">Menu</a></li>
            <li role="presentation"><a href="tours.php">Tours</a></li>
            <li role="presentation"><a href="events.php">Events</a></li>
            <li role="presentation"><a href="store.php">Store</a></li>
            <li role="presentation"><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="row"></div>

    <div id = "intro">
        <h1>Welcome</h1>
        <p>Enjoy the delicious food and beer offered at Longshot Brewery Company! Open to all ages.
            We bring together music, sports, food, and of course – <span id="beer">beer</span>. We offer 52 different kinds of beers
            and look forward to you trying them. We also provide a guided tour of our brewery, which is fun and
            informative for kids and adults. So what are you waiting for, come and check us out!
        </p>
    </div>

    <div class="slideshow-container">
        <?php
        include "car.html";
        ?>
    </div>
</div>

</body>
</html>