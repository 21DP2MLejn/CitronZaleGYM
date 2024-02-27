<template>
  <div class="container">
    <div class="content-container">
      <div class="section introduction">
        <h2>Introduction</h2>
        <p>Welcome to Citronzale Gym, where fitness takes center stage. At Citronzale, we're not just a gym; we're a community committed to your well-being. Our state-of-the-art facilities offer a diverse range of equipment and classes, accommodating fitness enthusiasts of all levels. From personalized training sessions to group workouts and the latest in cutting-edge technology, we're here to help you achieve your fitness goals, one step at a time. Our team of experienced trainers and nutrition experts are dedicated to guiding you on your journey to a healthier, stronger you. Join us at Citronzale Gym and embark on a path to a fitter, more vibrant you today.</p>
      </div>
      <div class="section introduction-image">
          <div class="image"></div>
      </div>
      <div class="section featured-classes">
        <h2>Featured Classes</h2>
        <p>Discover our exciting featured classes designed to make your fitness journey enjoyable and effective. Whether you're into high-intensity workouts, yoga, or personalized training, we have the perfect class for you. Join our community and elevate your fitness experience!</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Introduction'
}
</script>

<style scoped>
.container {
  width:  100%;
  min-height:  100vh;
  position: relative;
  background-color: var(--TeaGreen);
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  padding:  1rem;
}

.content-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap:  1rem;
}

.section {
  width:  100%;
  max-width:  600px;
  background-color: var(--ShinyShamrock);
  border-radius:  2rem;
  padding:  1.5rem;
  z-index:  10000000;
  text-align: center;
  box-shadow:  0  0  10px rgba(0,  0,  0,  0.1);
  min-height: 20rem;
  height: auto;
}

.introduction-image {
  width:  100%;
  height:  500px;
  background-image: url(../assets/Images/gym_picture3.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  border:  1px solid var(--PastelGreen);
  margin-top:  2rem;
  position: relative;
}

@media (min-width:  721px) {
  .container {
    flex-direction: row;
    justify-content: space-around;
    align-items: flex-start;
    padding:  2rem;
  }

  .content-container {
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
    width:  100%;
  }

  .section {
    flex:  1;
    max-width:  45%;
    height: auto;
  }

  .introduction-image {
    width:  55%;
    height: 300px;
    margin-top:  0;
  }
}
</style>
