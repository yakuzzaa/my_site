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
    <?php include_once "components/header.php" ?>


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
  <?php  include_once  "components/footer.php"?>

</body>
</html>
