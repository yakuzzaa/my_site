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
    <title>About me</title>
</head>
<body>
    <?php include_once "components/header.php" ?>

    <div class="about_me_section">
        <div class = "container_about_me">
            <img class = "background_about_me" src="img/about_me/background_aboutme.jpg" alt = "background">
            <div class = "text_about_me">
                <div class = "text_decoration"
                <p>Hi, my name is Polina. I am a first-year student of Ulyanovsk Technical University (ULGTU), Faculty of Information Technology (FIST).
                    I study at the direction of Informatics and Computer Science.</p>
                <p>I like programming, so besides studying at the institute I read a lot of books and try to make my own pet projects.</p>
                <p>I started to study web programming from 7th grade (I took html academy courses) and watched tutorial videos on youtube.
                    What I like most about programming is that you can create something new using only your computer.</p>
                <p>I am currently not exactly sure what I want to do after graduation, as I am interested in several areas of development:
                    backend/frontend programming, android programming, gamedev and computer science. Now I'm concentrating more on web development,
                    learning OOP in Java and Python and competitive programming.</p>
                    <p>Going to the next page you can see my academic projects (lab work in various disciplines and my individual projects).</p>
                <a href = "/my_works.php" class = "next_page_button">Next page</a>
            </div>
            </div>
        </div>
    </div>

    <?php  include_once  "components/footer.php"?>
</body>
</html>