const myApp = {
    data() {
      return {
        "person":undefined,
        "firstName": "John",
        "lastName": "Doe",
        "email": "john@gmail.com",
        "gender": "male",
        "picture": "https://randomuser.me/api/portraits/men/10.jpg",
        "location": [
            {
                "street": "1234 Drive Way",
                "city": "steeltown",
                "country":"USA"
            }
            ],
        "dob": [
            {
            "date": "1993-07-20T09:44:18.674Z",
            "age": 26
            }
            ]
        }
    },
    computed: {
        prettyBirthday() {
            return dayjs(this.person.dob.date).format('D MMM YYYY')
        }
    },
    methods: {
        fetchUserData() {
            console.log("A");
            fetch('https://randomuser.me/api/')
            .then( response => response.json() )
            .then( (responseJson) => {
                console.log(responseJson);
                console.log("C");
                this.person =responseJson.results[0]
                this.firstName = responseJson.results[0].name.first
                this.lastName = responseJson.results[0].name.last
                this.email = responseJson.results[0].email
                this.gender = responseJson.results[0].gender
                this.picture = responseJson.results[0].picture.large
                this.street = responseJson.results[0].location.street
                this.city = responseJson.results[0].location.city
                this.birthDate = responseJson.results[0].dob.date
                this.age = responseJson.results[0].dob.age
                this.country = responseJson.results[0].location.country
            })
            .catch( (err) => {
                console.error(err);
            })
            console.log("B");
        }
    },
    created() {
        this.fetchUserData();
    } //end created
}
  
Vue.createApp(myApp).mount('#myapp');
console.log("Z");