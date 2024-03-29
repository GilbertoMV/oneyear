<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Contador</title>
</head>
<body>
<?php require 'nav.html'?>
    
    <div class="contenedor__contador">
        <div class="texto__deslizante">
            <marquee><h3>🤍 yo más 🤍 yo más 🤍 yo más 🤍 yo más 🤍 yo más 🤍 yo más 🤍</h3></marquee>
        </div>
            <div class="contador__textos">
                <h1>"un año", "12 meses"</h1>
                <h3>
                    es cómo contestarías si hoy te preguntan "¿Cuánto llevan?" <br> pero es muy poco exacto ¿no crees? Mejor muestrales el siguiente contador 
                </h3>
            </div>
            <div id="contador" class="contador">
                <!-- CONTADOR -->
            </div>
            <div class="contador__textos">
                <h3> ♡ al igual que este contador aumenta, mi amor por ti lo hace también, te amo mi vida ♡</h3>
            </div>
    </div>


    <script src="./assets/js/simplyCountdown.min.js"></script>
    <script src="./assets/js/contador.js"></script>
    
    <!-- ALERTS -->
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/alertContador.js"></script>
</body>
</html>