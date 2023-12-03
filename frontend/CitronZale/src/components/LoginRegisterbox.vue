<template>
<body>  
  <div class="container">
    <h2>{{ title }}</h2>
    <input type="text" placeholder="email@example.com" v-if="isRegister">
    <input type="text" placeholder="Username">
    <input type="password" placeholder="password">
    <router-link to="/"><button>{{ loginButtonText }}</button></router-link>
    <router-link  to="/register">{{ registerLinkText }}</router-link>
    <router-link  to="/login">{{ loginLinkText }}</router-link>
    <router-link to="/forgot-password" class="forgot-password" v-if="!isRegister"> forgot password?</router-link>
  </div>
</body>
</template>

<script>
export default {
  name: 'LoginBox',
  props: {
    title: String,
    loginButtonText: String,
    registerLinkText: String,
    loginLinkText: String,
    isRegister: Boolean,
  },
  methods: {
    login() {
    },
  },
};
</script>
  
  <style scoped>

  body{
    position: absolute;
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    top: 0;
    left: 0;
    background-color:var(--Black) ;
  }

  button{
    width: 6rem;
    height: 1.8rem;
    border-radius: 1rem;
    border: 0.15rem solid var(--PastelGreen);
    margin-bottom: 1rem;
    transition: 0.3s ease-in-out;
  }

  button:hover{
    transform: scale(1.1);
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
  .container {
    position: relative;
    width: 30vw;
    height: 50vh;
    background-color: var(--ShinyShamrock);
    border-radius: 2rem;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    left: calc(100vw - 30vw - 7rem);
    top: 12.5rem;
  }

  .forgot-password{
    position: relative;
    text-decoration: none;
    color: var(--Black);
  }
  </style>