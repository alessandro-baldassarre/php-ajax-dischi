<?php include_once __DIR__ . "/../../server/data.php"  ?>

<main>
    <div class="container p-5">
        <div class="row p-5 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5  align-self-stretch gy-4">
            <?php foreach ($albums as $album) { ?>
                <div class="col text-white ali">
                    <div class="card p-2 text-center">
                        <img class="mb-3" src=<?php echo $album["coverUrl"] ?> alt=<?php echo $album["title"] ?>>
                        <h5><?php echo $album["title"] ?></h5>
                        <h5><?php echo $album["artist"] ?></h5>
                        <h5><?php echo $album["year"] ?></h5>

                    </div>
                    
                </div>
            <?php } ?>

        </div>
    </div>

</main>