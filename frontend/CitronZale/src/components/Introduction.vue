<template>
  <div class="container">
    <div class="image-container">
      <img src="../assets/Images/gym_picture7.jpg" alt="image" id="background-image">
    </div>
    <div class="content-container">
      <div class="introduction">
        <h2>Introduction</h2>
        <p>Welcome to Citronzale Gym, where fitness takes center stage. At Citronzale, we're not just a gym; we're a community committed to your well-being. Our state-of-the-art facilities offer a diverse range of equipment and classes, accommodating fitness enthusiasts of all levels. From personalized training sessions to group workouts and the latest in cutting-edge technology, we're here to help you achieve your fitness goals, one step at a time. Our team of experienced trainers and nutrition experts are dedicated to guiding you on your journey to a healthier, stronger you. Join us at Citronzale Gym and embark on a path to a fitter, more vibrant you today.</p>
      </div>
      <div class="featured-classes">
        <h2>Featured Classes</h2>
        <p>Discover our exciting featured classes designed to make your fitness journey enjoyable and effective. Whether you're into high-intensity workouts, yoga, or personalized training, we have the perfect class for you. Join our community and elevate your fitness experience!</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'introduction'
}
</script>

<style scoped>
.container {
  width: 100%;
  height: 125vh;
  position: relative;
  background-color: transparent;
  left: -1rem;
  margin: 0;
  padding: 0;
  top: 10rem;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  background-color: var(--TeaGreen);
  display: flex;
  align-content: center;
  justify-content: center;
  padding: 1rem;
}


.image-container {
  width: 100%;
  height: 70%;
  position: relative;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.introduction,
.featured-classes {
  width: 22rem;
  max-width: 100%;
  margin: 1rem;
  background-color: var(--ShinyShamrock);
  border-radius: 2rem;
  padding: 1.5rem;
  z-index: 10000000;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  height: auto;
}

.featured-classes {
  margin-top: 2rem;
}

@media (min-width: 721px) {
  .container {
    flex-direction: row;
  }

  .introduction,
  .featured-classes {
    flex: 1;
  }

  .image-container {
    order: 2;
  }
}
</style>