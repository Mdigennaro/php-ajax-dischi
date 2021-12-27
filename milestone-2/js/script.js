const app = new Vue({

  el: '#app',

  data:{

  },

  methods:{

  },

  mounted(){
    axios.get("php/database.php")
    .then(r=>{
      console.log('ok',r);
    })
    .catch((e)=>{
      console.log('ko',e);
    })
  }


})