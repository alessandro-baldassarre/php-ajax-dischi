
const app = new Vue(
    {
        el: '#app',
        data: {
            albums : [],
            albumsFiltered : [],
        },
        methods: {
            getAlbums(){
                axios.get('http://localhost:80/php-ajax-dischi/server/controller.php').then(
                (result) => {
                    this.albums = result.data.results;
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });
            },
            getAlbumsFiltered(){
                axios.get('http://localhost:80/php-ajax-dischi/server/controller.php?genre=pop').then(
                (result) => {
                    this.albumsFiltered = result.data.results;
                    console.log(result);
                }).catch((error) => {
                    console.warn(error);
                });
            },
        },
        created(){
            this.getAlbums();
            this.getAlbumsFiltered();
        }
    }
)