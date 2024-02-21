<template>
  <div class="login-box">
    <h2>{{ title }}</h2>
    <input type="text" placeholder="Email" v-if="isRegister">
    <br>
    <input type="text" placeholder="Username">
    <br>
    <input type="password" placeholder="Password">
    <br>
    <router-link to="/"><button>{{ loginButtonText }}</button></router-link>
    <br>
    <div class="links-container">
      <router-link to="/register" v-if="!isRegister">{{ registerLinkText }}</router-link>
      <router-link to="/login" v-if="isRegister">{{ loginLinkText }}</router-link>
      <br>
      <router-link to="/forgot-password" class="forgot-password" v-if="!isRegister">Forgot password?</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginBox',
  props: {
    title: {
      type: String,
      default: 'Gym Fitness Login'
    },
    loginButtonText: {
      type: String,
      default: 'Log In'
    },
    registerLinkText: {
      type: String,
      default: 'Register'
    },
    loginLinkText: {
      type: String,
      default: 'Already have an account?'
    },
    isRegister: Boolean,
  },
  methods: {
    login() {
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
