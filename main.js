const { createApp } = Vue

  createApp({
    data() {
      return {
        apiPath: 'server.php',
        data:''
      }
    },

    methods:{
        chiamataApi(){
            axios.get('assets/apis/server.php')
            .then( (res) => {
                this.data = res.data;
            });
        }
    },
    mounted(){
        this.chiamataApi();
    }
  }).mount('#app')