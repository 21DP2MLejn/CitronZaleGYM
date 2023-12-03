<template>
    <main>
      <NavBar />
      <div class="main-container">
        <div class="sub-container">
          <h1>About Us</h1>
          <h2>Welcome to our world.</h2>
        </div>
        <div class="information-container">
          <div class="container-two">
            <h2>Our Story</h2>
            <p>CitronZale is not just a gym; it's a lifestyle transformation hub. At CitronZale, we've redefined fitness as a holistic journey towards health and wellness. Our state-of-the-art facility boasts cutting-edge equipment, expert trainers, and a vibrant atmosphere. We offer a diverse range of fitness programs, from intense cross-training to serene yoga sessions, tailored for individuals of all levels. CitronZale prioritizes not just physical fitness, but also mental and emotional well-being. With a community of motivated members and a commitment to empowering personal growth, we're more than just a gym; we're your path to a healthier, happier, and more fulfilling life. Join CitronZale today and start your transformative journey.</p>
          </div>
          <div class="container-three">
            <h2>Meet the Team</h2>
            <h3>Trainers</h3>
            <p>John Anderson, Head Trainer:</p>
            <ul>
                <li>Head Trainer, with a Bachelor's degree in Sports Science and NASM certification</li>
                <li>Specializing in high-intensity interval training (HIIT) and functional fitness, he brings a decade of experience</li>
                <li>Known for his motivational coaching style, John helps clients push their limits and achieve their fitness goals</li>
            </ul>
            <h3>Nutritionists</h3>
            <p>Daniel Kim, Certified Nutrition Coach:</p>
            <ul>
                <li>Certified Nutrition Coach with expertise in weight management and meal planning.</li>
                <li>Passionate about helping clients develop sustainable, long-term nutrition habits.</li>
                <li>Supportive and educational approach, Daniel guides members toward healthier eating.</li>
            </ul>
          </div>
        </div>
      </div>
    </main>
  </template>
  
  <script>
  import NavBar from '../components/NavBar.vue';

  
  export default {
    components: {
      NavBar,
    }
  }
  </script>
  
  <style scoped>
  .main-container {
    background-color: var(--TeaGreen);
    position: absolute;
    margin: 0;
    padding: 0;
    left: 0;
    height: 100vh;
    width: 100vw;

  }
  
  .sub-container {
    position: relative;
    width: 100%;
    height: auto;
    padding: 3rem 0;
    text-align: center;
  }
  

  .information-container {
    display: flex;
    justify-content: space-between;
    padding: 2rem;
  }
  
  .container-two,
  .container-three {
    flex: 1;
    background-color: var(--ShinyShamrock);
    border-radius: 1rem;
    padding: 2rem;
    text-align: center;
    margin: 1rem;
  }

  @media (max-width: 992px) {
    .information-container{
        display: flex;
        justify-content: center;
        align-content: center;
        flex-direction: column;
    }

    .main-container {
        height: auto;
  }
}
  </style>