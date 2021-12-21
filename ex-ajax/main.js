
const app = new Vue({

    el: '#app',
    data: {
        dataB: null,
    },
    created() {
        this.getDataB();
    },
    methods: {
        getDataB(){

            axios.get('http://localhost/esercizio%2021%20dicembre/php-ajax-dischi/datab/database.php')
            .then(response => {
                this.dataB = response.data
            })
            .catch(err => {
                console.log(err);
            })
        }
    }

})