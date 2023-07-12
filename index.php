<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <title>DISCHI JSON</title>
</head>


<body>
    <div id="vue">


        <header class="header-colour">
            <div class="container">
                <img class="logo" src="./img/spotilogo.png" alt="">
            </div>
        </header>

        <main class="background-colour">

            <div class="container d-flex justify-content-center" >
                <div class="wrapper d-flex justify-content-between flex-wrap">
                    <div v-for="(disc, index) in discs" class="card d-flex flex-column text-center">
                        <img :src="disc.poster" class="poster" alt="">
                        <h1 class="fw-bold">{{ disc.title }}</h1>
                        <h2>{{ disc.author }}</h2>
                        <h3 class="fw-bold">{{ disc.year }}</h3>
                    </div>
                </div>
            </div>

        </main>


    </div>
    
    <script src="./script/main.js"></script>
</body>
</html>