
const app = new Vue(
    {
        el: '#app',
        data: {
            albums : []
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
            }
        },
        created(){
            this.getAlbums();
        }
    }
)