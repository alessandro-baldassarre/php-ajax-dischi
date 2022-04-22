<?php include_once __DIR__ . "/../../server/data.php"  ?>

<main>
    <div class="container p-5">
        <h1 class="text-uppercase text-white">all albums</h1>
        <div class="row p-5 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-lg-5 align-self-stretch gy-4">

            <div v-for="album in albums" class="col text-white ali">
                <div class="card p-2 text-center">
                    <img class="mb-3" :src="album.coverUrl" :alt="album.title">
                    <h2 class="album-title text-uppercase">{{album.title}}</h2>
                    <h5 class="album-artist">{{album.artist}}</h5>
                    <h5 class="album-year">{{album.year}}</h5>
                </div>

            </div>

        </div>
    </div>
    <div class="container p-5">
        <h1 class="text-uppercase text-white">albums filtered by genre Pop</h1>
        <div class="row p-5 row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-lg-5 align-self-stretch gy-4">

            <div v-for="album in albumsFiltered" class="col text-white ali">
                <div class="card p-2 text-center">
                    <img class="mb-3" :src="album.coverUrl" :alt="album.title">
                    <h2 class="album-title text-uppercase">{{album.title}}</h2>
                    <h5 class="album-artist">{{album.artist}}</h5>
                    <h5 class="album-year">{{album.year}}</h5>
                </div>

            </div>

        </div>
    </div>

</main>