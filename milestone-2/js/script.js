
const app = new Vue({
  
  el: '#app',

  data: {

    albums : [],

  },

  methods:{

  },

  mounted(){

    axios.get('http://localhost/php/php-ajax-dischi/milestone-2/php/server.php')
    .then((response) =>{
      this.albums = response.data;
      console.log(this.albums);
    })
    .catch((error) =>{
      console.log('ko',error);
    });

  }
})