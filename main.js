const app=new Vue(
    {
        el:"#app",
        data:{
            cards:[],
            genera:"All",
            artist:"All"
        },
        created(){
            axios.get('http://localhost/Boolean/php-ajax-dischi/server/controller.php').then(
                (results) =>{
                    this.cards=results.data.results;
                }).catch((error)=>{
                    console.warn(error);
                });
        }
    }
)