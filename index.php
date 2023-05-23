<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <!-- link favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link my style css -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>
<body>
    <div id="app">
        <div class="vh-100">
            <header class="d-flex justify-content-start align-items-center p-3">
                <img class="ms-5" src="./assets/img/logo.svg" alt="logoSpotify">
            </header>

            <main class="d-flex justify-content-center align-items-center">
                <!-- containeer-cards  -->
                <div id="containerCards" class="d-flex justify-content-between align-itams-start flex-wrap py-5">
                    <!-- singola card  -->
                    <div v-for="(el,i) in data" class="cardItem text-white d-flex flex-column justify-content-center align-items-center gap-3 rounded px-2 py-3 mb-4">
                        <img class="img-fluid" :src="el.poster" :alt="el.title">
                        <div class="d-flex flex-column justify-content-start align-items-center">
                            <span class="title text-center">{{el.title}}</span>
                            <span class="artist my-1">{{el.author}}</span>
                            <span class="year">{{el.year}}</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!-- script vue js  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- script axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- my script js -->
    <script src='main.js'></script>
</body>
</html>