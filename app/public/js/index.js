const myApp = {
    data() {
      return {
        "person": {},
        firstName: 'John',
        lastName: 'Doe',
        email: 'john@gmail.com',
        gender: 'male',
        picture: 'https://randomuser.me/api/portraits/men/10.jpg'   
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

            this.firstName = responseJson.results[0].name.first
            this.lastName = responseJson.results[0].name.last
            this.email = responseJson.results[0].email
            this.gender = responseJson.results[0].gender
            this.picture = responseJson.results[0].picture.large
        })
        .catch( (err) => {
            console.error(err);
        })
        console.log("B");
    } //end created
}
  
Vue.createApp(myApp).mount('#myapp');
console.log("Z");