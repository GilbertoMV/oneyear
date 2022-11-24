<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>About U</title>
</head>
<body>
    <?php require 'nav.html'?>

    <div class="banner">
        <a id="btn1"><img src="assets/imagenes/banner.jpeg" alt=""></a>
    </div>
    <main>
        <div class="bloque">
            <div>
                <a id="btn2"><img class="grid_img" src="assets/imagenes/img1.jpeg" alt=""></a>
            </div>
            <div>
                <a id="btn3"><img class="grid_imgC" src="assets/imagenes/img2.jpeg" alt=""></a>
                <div class="separador">
                    <button id="btn4" class="cinco"></button>
                </div>
            </div>
            <div>
                <a id="btn5"><img class="grid_img" src="assets/imagenes/img3.jpg" alt=""></a>
            </div>
            <div class="bloque2x2">
                <a id="btn6"><img class="grid_img" src="assets/imagenes/img4.jpg" alt=""></a>
            </div>
            <div class="bloque2x1">
                <div class="separador2"><button class="cuatro" id="btn7"></button></div>
            </div>
            <div>
                <div class="separadortriple">
                    <div><button id="btn8" class="uno"></button></div>
                    <div><button id="btn9" class="dos"></button></div>
                    <div><button id="btn10" class="tres"></button></div>
                </div>
            </div>
            <div class="bloque6">
                <a id="btn11"><img class="grid_img" src="assets/imagenes/img6.jpg" alt=""></a>
            </div>
            <div>
                <a id="btn12"><img class="grid_img" src="assets/imagenes/img7.jpg" alt=""></a>
            </div>
            <div>
                <div class="separadorDoble">
                    <div><button id="btn13" class="seis"></button></div>
                    <div><button id="btn14" class="siete"></button></div>
                </div>
            </div>
            <div>
                <a id="btn15"><img class="grid_img" src="assets/imagenes/img8.jpg" alt=""></a>
            </div>
            <div class="footer">
                <a id="btn16"><img class="grid_img" src="assets/imagenes/img9.jpg" alt=""></a>
            </div>
        </div>
    </main>

    <!-- ALERTS -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/alertAbout.js"></script>
</body>
</html>