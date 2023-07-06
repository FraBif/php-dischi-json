<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIfy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
    <div id="app">
        <header class="col-12 d-flex justify-start">
            <img src="./img/spotilogo.png" alt="logo" class="logo">
        </header>
        <main>
        <article class="disc-card" v-for="(disc, index) in discList" :key="index">
        <div class="poster-wrapper">
                    <img :src="disc.poster" :alt="disc.title">
                </div>
                <div class="disc-info">
                    <h3>{{ disc.title }}</h3>
                    <span>{{ disc.author }}</span>
                    <h5>{{ disc.year }}</h5>
                </div>
            </article>
        </main>
    </div>

 <script src="./script/main.js"></script>
</body>
</html>