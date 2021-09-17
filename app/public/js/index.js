const myApp = {
    data() {
      return {
        "person": {}
        }
    },
    created() {
        console.log("A");
        fetch('https://randomuser.me/api/')
        .then( response => response.json() )
        .then( (responseJson) => {
            console.log(responseJson);
            console.log("C");
            this.person = responseJson.results[0];
        })
        .catch( (err) => {
            console.error(err);
        })
        console.log("B");
    } //end created
}
  
Vue.createApp(myApp).mount('#myapp');
console.log("Z");