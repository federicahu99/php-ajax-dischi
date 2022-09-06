const app= new Vue ({
    el: "#root",
    data: {
        discs: []
    },
    mounted(){
        axios.get("../../api/api.php")
        .then(res => {
            this.discs= res.data;
        })
    }
})