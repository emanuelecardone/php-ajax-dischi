Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            // Variabile nella quale salverò il database
            albums: null,
            // Genere scelto dall'utente (All di default)
            genreFilter: 'All'
        },
        methods: {
            // Funzione axios per richiamare l'api che mi dà gli album
            getAlbums: function(){
                axios.get(
                    'http://localhost:8888/php-ajax-dischi/milestone-2/server.php',
                    {
                        params: {
                            genre: this.genreFilter
                        }
                    }
                )
                .then((response) =>{
                    this.albums = response.data;
                });
            }
        },
        created: function(){
            this.getAlbums();
        }
    }
);