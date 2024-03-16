<template>
  <div class="login-box">
    <h2>{{ title }}</h2>
    <form @submit.prevent="register">
      <input type="email" placeholder="Email" v-model="email" required>
      <br>
      <input type="text" placeholder="Name" v-model="name" required>
      <br>
      <input type="text" placeholder="Last Name" v-model="lastname" required>
      <br>
      <input type="date" id="birthdate" v-model="birthdate" placeholder="Birth Date" required>
      <br>
      <input type="text" placeholder="Phone Number" v-model="phonenumber" required>
      <br>
      <input type="password" placeholder="Password" v-model="password" required>
      <br>
      <input type="password" placeholder="Confirm Password" v-model="password_confirmation" required>
      <br>
      <button>{{ registerButtonText }}</button>
      <br>
    </form>
    <div class="links-container">
      <router-link to="/login">{{ loginLinkText }}</router-link>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';

export default {
  data() {
    return {
      title: 'Register',
      email: '',
      name: '',
      lastname: '',
      birthdate: '',
      phonenumber:'',
      password: '',
      password_confirmation: '',
      registerButtonText: 'Register',
      loginLinkText: 'Already have an account? Login here',
    };
  },
  methods: {
    async register() {
      const formattedBirthdate = moment(this.birthdate).format('YYYY-MM-DD');
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/register', {
          email: this.email,
          name: this.name,
          lastname: this.lastname,
          birthdate: formattedBirthdate,
          phonenumber: this.phonenumber,
          password: this.password,
          password_confirmation: this.password_confirmation,
        });
        console.log(response.data);
        this.$router.push('/login'); 
      } catch (error) {
        console.error('Error during registration:', error);
        alert('Error during registration');
      }
    },
  },
};
</script>

<style scoped>

.login-box {
  width:   320px;
  padding:   20px;
  background-color: white;
  border-radius:   10px;
  box-shadow:   0   0   10px rgba(0,   0,   0,   0.1);
  margin:   50px auto;
  max-height:  600px;
}

.login-box h2 {
  text-align: center;
  color: var(--TeaGreen);
  margin-bottom:   20px;
}

.login-box input {
  width:   94%;
  padding:   10px;
  margin-bottom:   10px;
  border:   1px solid var(--TeaGreen);
  border-radius:   5px;
}

.login-box button {
  width:   100%;
  padding:   10px;
  background-color: var(--TeaGreen);
  color: white;
  border: none;
  border-radius:   5px;
  cursor: pointer;
  transition: background-color   0.3s ease;
}

.login-box button:hover {
  background-color: var(--ShinyShamrock);
}

.links-container {
  text-align: center;
}

.links-container a {
  color: var(--TeaGreen);
  text-decoration: none;
  margin:   0.5rem;
}

.links-container a:hover {
  color: var(--ShinyShamrock);
}

.forgot-password {
  font-size:   0.8rem;
  color: var(--TeaGreen);
}


@media (max-width: 768px) {

  .login-box{
    position: relative;
    top: 12rem;
  }
  
}
</style>