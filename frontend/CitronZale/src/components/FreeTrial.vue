<template>
  <div class="container">
    <div class="free-trial">
      <div class="image-container">
        <img src="../assets/Images/freetrialimage.jpg" alt="Free Trial Image">
      </div>
      <div class="text-container">
        <h1>Not ready to start? Get 3 day free trial.</h1>
        <p>By submitting this free training form, you agree to receive marketing information. You can withdraw your consent at any time by contacting citronzalegym@gmail.com.</p>
        <router-link to="/freetrial"><button type="submit">GET FREE TRIAL</button></router-link>
      </div>
    </div>
  </div>
</template>


<script>

export default {
    name: 'freetrial',
}
</script>

<style scoped>
:root {
  --primary-color: #00a676; /* Shiny Shamrock */
  --secondary-color: #ffffff; /* White */
  --accent-color: #ff6f61; /* Accent color */
  --text-color: #333333; /* Dark Text */
  --button-bg: #00a676;
  --button-hover-bg: #008a5e;
  --button-text: #ffffff;
}

.container {
  width: 100vw;
  min-height: 40rem;
  background-color: var(--primary-color);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 3rem;
  position: relative;
  left: -4rem;
}

.free-trial {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1200px;
  background-color: var(--secondary-color);
  border-radius: 1rem;
  box-shadow: 0 0px 10px var(--PastelGreen);
  overflow: hidden;
}

.text-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 2rem;
  max-width: 50%;
}

.text-container h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.text-container p {
  font-size: 1rem;
  margin-bottom: 2rem;
}

.image-container {
  max-width: 50%;
  height: 100%;
}

.image-container img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

button {
  padding: 1rem 2rem;
  font-size: 1rem;
  color: var(--button-text);
  background-color: var(--button-bg);
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover,
button:focus {
  background-color: var(--button-hover-bg);
}

@media (max-width: 768px) {
  .free-trial {
    flex-direction: column;
    text-align: center;
  }

  .text-container {
    max-width: 100%;
    padding: 1rem;
  }

  .image-container {
    max-width: 100%;
  }

  .image-container img {
    height: auto;
  }
}
</style>
