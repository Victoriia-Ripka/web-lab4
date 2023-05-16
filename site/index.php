<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viktoriia Ripka</title>
</head>
<body>
    <header>
        <nav>
            <ul id="menu">
                <?php
                $pages = dir("/pages");
                echo $pages;
                ?>
                <!-- <li><a href="?id=main">Головна</a></li>
                <li><a href="?id=about">Про мене</a></li>
                <li><a href="?id=consultation">Консультації</a></li>
                <li><a href="?id=program">Програма для батьків</a></li>
                <li><a href="?id=articles">Статті</a></li> -->
            </ul>
        </nav>
    </header>
    <section>
        <div id="content">
            <?php
                if(isset($_GET['id'])){
                    include 'pages/'.$_GET['id'].'.php';
                } else {
                    include 'pages/main.php';
                }
            ?>
        </div>
    </section>
    <footer>
        footer
    </footer>
</body>
</html>