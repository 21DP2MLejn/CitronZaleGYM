<template>
  <main>
    <div class="navbar">
      <NavBar />
    </div>
    <div class="main-container">
      <div id="container">
        <div class="greetings">
          <h1>Hello, {{ user.name }}</h1>
        </div>
        <div class="profile-picture"></div>
        <div class="user-details">
          <input type="text" class="name" v-model="user.name" placeholder="Name" readonly>
          <input type="text" class="lastname" v-model="user.lastname" placeholder="Last Name" readonly>
          <input type="date" class="birthdate" v-model="user.birthdate" placeholder="Birthdate">
        </div>
        <div class="user-contact">
          <input type="text" class="email" v-model="user.email" placeholder="E-mail" readonly>
          <input type="text" class="phone-number" v-model="user.phonenumber" placeholder="Phone Number" readonly>
        </div>
        <div class="user-guardian">
          <input type="text" class="guardian-name" v-model="user.guardian_name" placeholder="Guardian Name" readonly>
          <input type="text" class="guardian-lastname" v-model="user.guardian_lastname" placeholder="Guardian Last Name" readonly>
          <input type="text" class="guardian-email" v-model="user.guardian_email" placeholder="Guardian E-mail" readonly>
          <button class="delete-account" @click="deleteAccount">Delete account</button>
        </div>
      </div>
    </div>
  </main>
  </template>
  
  <script>
  
  import NavBar from '../components/NavBar.vue';
  import axios from 'axios';
  
  export default {
    components: {
      NavBar,
    },
    data() {
      return {
        user: {
          name: '',
          lastname: '',
          email: '',
          phonenumber: '',
          birthdate: '',
          guardian_name: '',
          guardian_lastname: '',
          guardian_email: '',
        },
      };
    },
    async created() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/profile');
        this.user = response.data.data;
      } catch (error) {
        console.error('Error fetching profile:', error);
      }
    },
    async deleteAccount() {
      try {
        // Retrieve the token from localStorage and log it to the console
        const token = localStorage.getItem('token');
        console.log(token); // Debugging statement to check the token value

        const response = await axios.delete('http://127.0.0.1:8000/api/delete-account', {
          headers: {
            'Authorization': `Bearer ${token}` // Use the logged token here
          }
        });
        console.log(response.data.message);
        this.$router.push('/login');
        // Optionally, redirect the user or show a confirmation message
      } catch (error) {
        console.error('There was an error!', error);
      }
    }
  }
  </script>

<style scoped>

.main-container{
  width: 100%;
  height: 100%;
  background-color: var(--TeaGreen);
}


.input-container {
  display: flex;
  flex-direction: column;
  width: 300px;
  margin: 20px;
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus {
  border-color: var(--ShinyShamrock);
  box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
  outline: none; 
}
.navbar{
    position: relative;
    margin: 1;
    padding: 1;
    left: -0.5rem;
    top: -0.5rem;
}

#container{
  position: absolute;
  top: 45%;
  left: 45%;
  transform: translate(-50%, -50%);
  padding: 10px;
}


.profile-picture{
   width: 20rem;
   height: 20rem;
   background-image: url(../assets/Images/gym_picture5.jpg);
   background-repeat: no-repeat;
   background-size: cover;
   border-radius: 10rem;
   overflow: hidden;
   display: flex;
   justify-content: center;
   align-content: center;
   border: 0.18rem solid var(--PastelGreen);
   position: relative;
   left: -10rem;
}

button {
  --b: 3px;   
  --s: .15em;
  
  padding: calc(.05em + var(--s)) calc(.3em + var(--s));
  color: var(--black);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--black) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .2em;
}

button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: red; /* Change outline color on hover */
  outline-offset: .05em;
  background: red; /* Change background color on hover */
  color: white; /* Change text color on hover */
}

button:active {
  background: var(--black);
  color: var(--black);
}

button{
    font-size: 1rem;
    cursor: pointer;
    border: none;
    margin: .1em;
    transition: 0.5s;
    position: relative;
    margin: 5px;
}



.user-details{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -10rem;
}

.user-contact{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -9rem;
}

.user-guardian{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -8rem;
}

h1{
  font-size: 3rem;
}

.greetings{
  position: relative;
  left: 16rem;
  top: 5rem;
}

</style>