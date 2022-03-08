<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = styles/style.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script type = "text/javascript" src = "/scripts/script.js"></script>
    <title>My site</title>
</head>
<body>

    <nav class="navbar">
        <div class="container">
            <a href = "/index.php" class = "navbar-logo"><img  alt = "logo" src="/img/home/my_logo.png"></a>

            <div class = "navbar-wrap">
                <ul class = "navbar-menu">
                    <li><a href="/index.php">Home</a> </li>
                    <li><a href="/about_me.php">About me</a> </li>
                    <li><a href="/my_works.php">My works</a> </li>
                    <li><a href="/contacts.php">Contacts</a> </li>
                    <li><a href="/gallery.php">Gallery</a> </li>
                </ul>
                <a href="/registration_page.php" class ="registration">Join me</a>
            </div>
        </div>
    </nav>

<div class ="main_block">
    <div class ="conatainer_for_main">
        <img class = "background_home" src = "/img/home/background_home.png" alt ="background">
        <div class = "text_homepage">
            <p>This is the home page of my business card site.</p>
            <p>In section about me you can find a little more useful information (including why I do programming),
                in section my works are my latest works in different programming languages,
                in section contacts you can find links to my mail, discord,
                telegram and pages in social networks (it is also possible to do by clicking on footer icons vk, facebook (unfortunately facebook is already impossible) and instagram).<p/>
            <p>In the gallery section you can look at pictures of kittens, and of course you can click on the Join me button and register (test functionality).</p>
            <a href = "/about_me.php" class = "next_page_button">Next page</a>
        </div>
    </div>

</div>

<div class="footer">
    <div class = "container_footer">
        <ul class ="footer_inf">
            <li>2022</li>
            <li>All rights belong to me.</li>
        </ul>
        <ul class ="icons_list">
            <li><a class = "inst" href= "#"> <img alt ="instagram logo" src ="/img/home/inst.png"></a></li>
            <li> <a class = "vk"  href= "#"> <img  alt ="vk logo" src ="/img/home/vk.png"></a></li>
        </ul>

    </div>

</div>
</body>
</html>
