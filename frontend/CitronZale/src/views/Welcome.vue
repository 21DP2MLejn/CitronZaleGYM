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
  </div>
</template>

  <script>
  import NavBar from '../components/NavBar.vue';
  import ImageSlider from '../components/ImageSlider.vue';
  import Reasons from '../components/Reasons.vue';
  import Introduction from '../components/Introduction.vue';
  
  export default {
    components: {
      NavBar,
      ImageSlider,
      Reasons,
      Introduction,
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
  top: 51rem;
  left: -3rem;
  padding: 0;
  margin: 0;
}

.introduction{
  position: relative;
  top: 50rem;
  left: 0;
  margin: 0;
  padding: 0;
  display: flex;
  width: 100vw;
}

</style>