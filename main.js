const { createApp } = Vue;

createApp({

  data(){
    return{
      apiUrl:'server.php',
      disks:[],
      isClicked:false,
      details:{}
    }
  },
  methods:{
    getDisks(){
      axios.get(this.apiUrl)
      .then(result => {
        this.disks=result.data
      })
      .catch(error =>{
        console.log(error);
      })
    },
    hasBeenClicked(index){
      axios.get(this.apiUrl)
      .then(result => {
        this.isClicked=true;
        console.log(result.data[index]);
        console.log(this.isClicked);
        this.details=result.data[index];
      })
      .catch(error =>{
        console.log(error);
      })
    },
    closeDetails(){
      this.isClicked=false;
      console.log(this.isClicked);
      this.getDisks();
    }
  },
  mounted(){
    this.getDisks();
  }

}).mount('#app');