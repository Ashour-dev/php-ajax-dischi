<?php

// include __DIR__ "/partials/data.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dischi</title>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <img src="img/logo.png" alt="">
    </div>
    <div class="content" id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 contentWrapper mt-5 mx-auto d-flex flex-wrap gap-3">
                    <div class="myCard" v-for="card in cards">
                        <img class="p-3 w-100" :src="card.poster" alt="card.title">
                        <div class="text text-center">
                            <h6 class="px-3">
                                {{card.title}}
                            </h6>
                            <div class="desc">
                                {{card.author}}
                                <br>
                                {{card.year}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>
</html>