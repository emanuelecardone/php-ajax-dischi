<header class="w-100 h_100p primary_color_bg d-flex justify-content-between align-items-center px_50">
    <!-- Non vado indietro di una cartella in quanto sarà index.php a richiamare l'immagine -->
    <img src="./img/logo.png" alt="Logo Spotify" class="w_50p">

    <div class="filter_section w-25">
        <!-- Pulsante che farà partire la chiamata api -->
        <a @click="getAlbums()" href="#" class="btn secondary_color_bg text-white border border-1 border-white p-2">Search</a>
        <!-- Select per i generi -->
        <select v-model="genreFilter" class="genre_select w-75 ms-2">
            <option value="All">All genres</option>
            <?php foreach(get_genres($database) as $genre){ ?>
            <option value="<?php echo $genre ?>"><?php echo $genre ?></option>
            <?php } ?>
        </select>
    </div>
</header>