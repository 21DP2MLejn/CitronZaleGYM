<template>
  <div class="container">
    <div class="image-container">
      <router-link to="/"><img src="@/assets/Images/Logo.png" alt="logo" class="logo-image" /></router-link>
    </div>
    <button class="toggle-button" @click="toggleNav">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>
    <ul class="nav-list" :class="{ 'active': isNavOpen }">
      <li><router-link to="/prices" >Prices</router-link></li>
      <li><router-link to="/schedule">Schedule</router-link></li>
      <li><router-link to="/trainings">Trainings</router-link></li>
      <li><router-link to="/about-us">AboutUs</router-link></li>
      <li><router-link to="/clubs">Clubs</router-link></li>
      <li><router-link to="/profile">Profile</router-link></li>
      <li>
        <router-link to="/login">Join</router-link>
      </li>
    </ul>
  </div>
</template>

<style scoped>
.logo-image {
  width: 100%;
  height: auto;
  max-width: 100%;
}

.image-button{
  width: 4rem;
  height: 4rem;
  outline: none;
}

.container {
  background-color: var(--ShinyShamrock);
  height: 8vh;
  width: 100vw;
  margin: 0;
  position: absolute;
  top: 0;
  left: 0;
  border-bottom: 2px solid var(--TeaGreen);
  z-index: 10000;
}

.image-container {
  background-color: var(--Black);
  width: 4rem;
  height: 4rem;
  top: 0.3rem;
  left: 0.3rem;
  position: relative;
  z-index: 1000;
}

a {
  text-decoration: none;
  color: var(--Black);
  font-size: large;
}

.register-button {
  margin-left: auto;
  position: absolute;
  left: 110rem;
  top: 1.3rem;

}


.nav-list {
  width: 60vw;
  height: 8vh;
  list-style: none;
  display: flex;
  padding: 0;
  position: relative;
  left: 8rem;
  top: -3.5rem;
  z-index: 1000;
}

.toggle-button {
  display: none;
  background-color: transparent;
  border: none;
  cursor: pointer;
  position: absolute;
  z-index: 10000;
  top: 0.2rem;
  right: 1rem; 
}

li {
  margin-right: 3rem;
  transition: 0.5s;
}

li:hover{
  transform: scale(1.05);
  color: var(--PastelGreen);
}


.bar {
  position: relative;
  display: block;
  width: 2rem;
  height: 0.25rem;
  top: 0.95rem;
  margin: 0.4rem 0.1rem 0.20rem 0.5rem;
  background-color: var(--Black);
  transition: 0.4s;
}


@media (max-width: 992px) {
  .toggle-button {
    display: block;
  }

  .nav-list {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 3.5rem;
    left: 0;
    width: 100%;
    height: auto; 
    background-color: var(--ShinyShamrock);
    text-align: center;
    border-bottom: 2px solid var(--TeaGreen);
  }

  .nav-list.active {
    display: flex;
  }

  .toggle-button.active .bar:nth-child(1) {
    transform: rotate(-45deg) translate(-5px, 6px);
  }

  .toggle-button.active .bar:nth-child(2) {
    opacity: 0;
  }

  .toggle-button.active .bar:nth-child(3) {
    transform: rotate(45deg) translate(-5px, -6px);
  }
}
</style>

<script>
export default {
  name: 'NavBar',
  data() {
    return {
      isNavOpen: false,
    };
  },
  methods: {
    toggleNav() {
      this.isNavOpen = !this.isNavOpen;
    },
  },
};
</script>