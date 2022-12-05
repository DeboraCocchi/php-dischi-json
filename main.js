const { createApp } = Vue;

createApp({

  data(){
    return{
      apiUrl:'server.php',
      disks:[],
    }
  },
  methods:{
    getDisks(){
      axios.get(this.apiUrl)
      .then(result => {
        console.log(result.data);
        console.log('ciao');
        this.disks=result.data
      })
      .catch(error =>{
        console.log(error);
      })
    }
  },
  mounted(){
    this.getDisks();
  }

}).mount('#app');