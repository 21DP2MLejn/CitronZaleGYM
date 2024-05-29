<template>
  <div class="container">
    <div class="content-container">
      <div class="section introduction">
        <div class="introduction-text">
          <h2>Introduction</h2>
          <p>Welcome to Citronzale Gym, where fitness takes center stage. At Citronzale, we're not just a gym; we're a community committed to your well-being. Our state-of-the-art facilities offer a diverse range of equipment and classes, accommodating fitness enthusiasts of all levels. From personalized training sessions to group workouts and the latest in cutting-edge technology, we're here to help you achieve your fitness goals, one step at a time. Our team of experienced trainers and nutrition experts are dedicated to guiding you on your journey to a healthier, stronger you. Join us at Citronzale Gym and embark on a path to a fitter, more vibrant you today.</p>
        </div>
        <div class="introduction-image"></div>
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
:root {
  --primary-color: #00a676; /* Shiny Shamrock */
  --secondary-color: #d3f9d8; /* Tea Green */
  --text-color: #333;
  --bg-color: #fff;
}

.container {
  width: 100%;
  min-height: 100vh;
  background-color: var(--bg-color);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 2rem 1rem;
}

.content-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
  width: 100%;
  max-width: 1200px;
}

.section {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  background-color: var(--secondary-color);
  border-radius: 1rem;
  padding: 2rem;
  box-shadow: 0 0px 10px var(--PastelGreen);
  text-align: center;
}

.introduction {
  flex-direction: column;
}

.introduction-text {
  order: 2;
}

.introduction-image {
  order: 1;
  width: 100%;
  height: 300px;
  background-image: url(../assets/Images/gym_picture3.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 1rem;
}

.featured-classes {
  background-color: var(--primary-color);
  color: var(--bg-color);
}

@media (min-width: 768px) {
  .section {
    flex-direction: row;
    text-align: left;
  }

  .introduction {
    flex-direction: row;
  }

  .introduction-text, .introduction-image {
    flex: 1;
    order: unset;
  }

  .introduction-image {
    height: auto;
    max-width: 50%;
  }

  .featured-classes {
    flex-direction: row;
    justify-content: space-between;
  }
}
</style>

