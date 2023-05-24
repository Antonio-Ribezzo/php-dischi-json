const { createApp } = Vue

  createApp({
    data() {
      return {
        apiPath: 'server.php',
        data:'',
        bool: false
      }
    },

    methods:{
        chiamataApi(){
            axios.get('assets/apis/server.php')
            .then( (res) => {
                this.data = res.data;
                console.log(this.data)
            });
        },

        modalCardActive(i){
          let card = document.querySelector('#containerCards')

          card.innerHTML += 
          `
          <div class="modalMy text-white d-flex justify-content-center align-items-center">
          <div class="modalContent d-flex flex-column justify-content-center align-items-center gap-3 rounded px-2 py-3 mb-4 position-relative"> 
          <span class='closeButton position-absolute' onClick='window.location.reload();'>&times;</span>
              <img class='myStyleImg' src='${this.data[i].poster}' alt='${this.data[i].title}'> 
              <div class="d-flex flex-column justify-content-start align-items-center">
                  <span class="title text-center">${this.data[i].title}</span>
                  <span class="artist my-1">${this.data[i].author}</span>
                  <span class="year">${this.data[i].year}</span>
              </div> 
            </div>
          </div>
          `
        }
    },
    mounted(){
        this.chiamataApi();
    }
  }).mount('#app')