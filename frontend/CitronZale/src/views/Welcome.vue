<template>
  <div class="container">
    <NavBar />
    <div class="content">
      <ImageSlider />
    </div>
    <div class="reasons">
      <Reasons />
    </div>
    <div class="introduction">
      <Introduction />
    </div>
    <div class="freetrial">
      <FreeTrial />
    </div>
    <div class="footer">
      <Footer />
    </div>
  </div>
</template>

  <script>
  import NavBar from '../components/NavBar.vue';
  import ImageSlider from '../components/ImageSlider.vue';
  import Reasons from '../components/Reasons.vue';
  import Introduction from '../components/Introduction.vue';
  import FreeTrial from '../components/FreeTrial.vue';
  import Footer from '../components/Footer.vue';
  
  export default {
    components: {
      NavBar,
      ImageSlider,
      Reasons,
      Introduction,
      FreeTrial,
      Footer,
    },
  };
  </script>

<style scoped>

body{
    background-color: var(--TeaGreen);
    width: 100vw;
    height: 100vh;
    position: absolute;
    padding: 0;
    margin: 0;
    top: 0;
    left: 0;
}


.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.reasons{
  position: relative;
  top: -10rem;
  left: -3rem;
  padding: 0;
  margin: 0;
}

.introduction{
  position: relative;
  top: -2rem;
  left: -1rem;
  margin: 0;
  padding: 0;
  display: flex;
  width: 100vw;
}

.freetrial{
  position:relative;
  top: -15rem
}

.footer{
  top: 1rem;
  position: relative;
}

</style>
