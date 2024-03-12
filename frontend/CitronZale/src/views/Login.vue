<template>
  <div class="login-box">
    <h2>{{ title }}</h2>
    <form @submit.prevent="login">
      <input type="email" placeholder="Email" v-model="email" required>
      <br>
      <input type="password" placeholder="Password" v-model="password" required>
      <br>
      <button type="submit">{{ loginButtonText }}</button>
      <br>
    </form>
    <div class="links-container">
      <router-link to="/register">{{ registerLinkText }}</router-link>
      <br>
      <router-link to="/forgot-password" class="forgot-password">Forgot password?</router-link>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      title: 'Login',
      email: '',
      password: '',
      loginButtonText: 'Login',
      registerLinkText: 'Don\'t have an account? Register here',
    };
  },
  methods: {
    async login() {
      try {
          const response = await axios.post('http://127.0.0.1:8000/api/login', {
            email: this.email,
            password: this.password,
          });
          if (response.status === 200) {
            if (response.data.status) {
              localStorage.setItem('authToken', response.data.token);
              axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
              this.$router.push('/');
            } else {
              console.error('Login failed:', response.data.message);
              alert("Login failed");
            }
          } else {
            console.error('Unexpected response status:', response.status);
            alert('Unexpected response status');
          }
      } catch (error) {
          console.error('Error during login:', error);
          alert('Error during login');
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
  max-height:  400px; 
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