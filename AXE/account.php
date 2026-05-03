<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="account.css">
</head>
<body>
    <header>
        <div class="logo">
            <h2><a href="main.php" class="home">HOME</a></h2>
        </div>
        <nav>
            <ul class="sidebar" id="sidebar">
                <li onclick=hideSidebar()><a href="">ICON</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Cards</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
            <ul>
                <li class="hideOnMobile"><a href="">About</a></li>
                <li class="hideOnMobile"><a href="">Cards</a></li>
                <li class="hideOnMobile"><a href="">Contact</a></li>
                <li class="hideOnMobile"><a href="account.php">Account</a></li>
                <li class="menu-button" onclick=showSidebar()><a>ICON</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="details-wrapper">
        <div class="profile-pic">
            <div class="pic"></div>
        </div>
        <div class="details">
            <div class="name"></div>
            <div class="uid"></div>
            <div class="udescription"></div>
        </div>
        

        <!-- à faire : changer la visibilité des boutons lorsque le user est connecté ou non -->
    </div>
    <div class="buttons">
        <button class="button-log"><a href="signin.php">Register</a></button>
        <button class="button-log"> <a href="login.php">Log In</a></button>
        <form class="logoutform" action="logout.php" method="POST">
        <button class="button-logout">Log Out</button>
        </form>
    </div>
</body>
</html>


<?php






?>