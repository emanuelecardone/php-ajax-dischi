<header class="w-100 h_100p primary_color_bg d-flex justify-content-between align-items-center px_50">
    <!-- Non vado indietro di una cartella in quanto sarà index.php a richiamare l'immagine -->
    <img src="./img/logo.png" alt="Logo Spotify" class="w_50p">

    <!-- Select per i generi -->
    <select class="genre_select w-25">
        <option value="All">All genres</option>
        <?php foreach(get_genres($database) as $genre){ ?>
           <option value="<?php echo $genre ?>"><?php echo $genre ?></option>
        <?php } ?>
    </select>
</header>