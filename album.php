<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Albúm</title>
</head>
<body>
    <nav class="nav">
        <div class="nav__container">
            <a href="contador.php">
                <h1 class="nav__logo">First Year <box-icon name='calendar-heart' animation='tada' color='#fffbfb' ></box-icon></h1>
            </a>

            <label for="menu" class="nav__label">
                <img src="assets/imagenes/menu.svg" alt="menuicon" class="nav__img">
            </label>
            <input type="checkbox" id="menu" class="nav__input">

            <div class="nav__menu">
                <a href="contador.php" class="nav__item">counter</a>
                <a href="album.php" class="nav__item check">album</a>
                <a href="blog.php" class="nav__item">blog</a>
                <a href="aboutU.php" class="nav__item ">about u</a>
            </div>
        </div>
    </nav>
    
    <!-- ALERTS -->
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/alertAlbum.js"></script>
</body>
</html>