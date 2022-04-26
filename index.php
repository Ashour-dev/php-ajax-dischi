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
    <main id="app">
    <div class="header d-flex justify-content-between align-items-center">
        <img src="img/logo.png" alt="">
        <div class="right me-2 d-flex justify-content-between align-items-center">
            <label class="text-white me-2" for="genera">Genera:</label>
            <select v-model="genera" class="form-select shadow-none" name="genera">
                <option value="All">All</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
            <label class="text-white ms-2" for="artist">Artist:</label>
            <select v-model="artist" class="form-select shadow-none ms-2" name="artist">
                <option value="All">All</option>
                <option value="Bon Jovi">Bon Jovi</option>
                <option value="Queen">Queen</option>
                <option value="Sting">Sting</option>
                <option value="Steve Gadd Band">Steve Gadd Band</option>
                <option value="Iron Maiden">Iron Maiden</option>
                <option value="Eric Clapton">Eric Clapton</option>
                <option value="Deep Purple">Deep Purple</option>
                <option value="Metallica">Metallica</option>
                <option value="Dave Weckl">Dave Weckl</option>
                <option value="Michael Jacjson">Michael Jacjson</option>
            </select>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 contentWrapper mt-5 mx-auto d-flex flex-wrap gap-3" v-if="cards">
                    <div class="myCard" v-for="card in cards"
                    :class="((genera=='All' && artist=='All')
                    ||(genera=='All' && artist==card.author)
                    ||(genera==card.genre && artist=='All')
                    ||(genera==card.genre && artist==card.author)) ? 'd-block': 'd-none'">
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
    </main>
    
    <script src="main.js"></script>
</body>
</html>