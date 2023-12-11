<template>
<main>
  <div class="navbar">
      <NavBar />
  </div>
    <div class="main-container">
      <div id="container">
        <div class="greetings">
          <h1>Hello, {{userName}}</h1>  
        </div>
        <div class="profile-picture"></div>
        <div class="user-details">
            <input type="text" class="name" placeholder="Name">
            <input type="text" class="lastname" placeholder="Last Name">
            <input type="date" class="birthdate" placeholder="Birthdate">
        </div>
        <div class="user-contact">
            <input type="text" class="email" placeholder="E-mail">
            <input type="text" class="phone-number" placeholder="Phone Number">
        </div>
        <div class="user-guardian">
            <input type="text" class="guardian-name" placeholder="Guardian Name">
            <input type="text" class="guardian-lastname" placeholder="Guardian Last Name">
            <input type="text" class="guardian-email" placeholder="Guardian E-mail">
            <input type="text" class="guardian-country" placeholder="Country" v-show="country">
            <button id="choosecountry" @click="ShowCountry">Country</button>
        </div>
    </div>
</div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';

export default{
    components:{
    NavBar,
},
data(){
    return{
        country: false,
        userName: ''
    }
},
method:{
    ShowCountry(){
        this.country = !this.country;

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
  outline-color: var(--black);
  outline-offset: .05em;
}
button:active {
  background: var(--black);
  color: var(--TeaGreen);
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