<main class="w-100 secondary_color_bg d-flex justify-content-center align-items-center">

    <!-- Contenitore cards principale -->
    <div class="cards_wrapper w-50">
        <div class="container-fluid">
            <!-- Gli album sono 6 e non 10 come lo screenshot, quindi faccio 2 righe da 3 -->
            <div class="row row-cols-3 g-4">
                <?php foreach($database as $album) { ?>
                    <div class="col">
                        <div class="single_card text-center">
                            <img src="<?php echo $album['poster'] ?>" alt="Copertina di <?php echo $album['title'] ?>" class="w-75">
                            <h4 class="album_title text-white text-uppercase my-4"><?php echo $album['title'] ?></h4>
                            <span class="album_author_date tertiary_color_text fs-5"><?php echo $album['author'] ?><br><?php echo $album['year'] ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</main>