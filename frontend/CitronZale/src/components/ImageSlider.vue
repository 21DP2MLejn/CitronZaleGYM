<template>
  <div class="background">
    <div class="image-slider">
      <div class="slider-image-container">
        <div class="text-container">
          <router-link to="/login"><h1>START NOW!</h1></router-link>
          <h2>The only bad workout is one you didn't do.</h2>
          <p>What are you waiting for? Join NOW and get your dream physique! We have the best deals for everyone!</p>
          <ul>
            <li>Spacious exercise hall</li>
            <li>Wide variety of modern equipment</li>
            <li>Friendly customer service</li>
            <li>Professional coaches</li>
            <li>Exclusive membership deals</li>
            <li>OPEN  24/7</li>
          </ul>
        </div>
        <img :key="currentIndex" :src="currentImageSrc" alt="Gym Image Slider" class="slider-image" />
      </div>
      <div class="button-container">
        <button @click="prevImage"><p> &leftarrow; </p></button>
        <button @click="nextImage"><p> &RightArrow; </p></button>
      </div>
    </div>
  </div>
  </template>  


<script>
import gymPicture1 from '@/assets/images/gym_picture4.jpg';
import gymPicture2 from '@/assets/images/gym_picture5.jpg';
import gymPicture3 from '@/assets/images/gym_picture1.jpg';

export default {
  data() {
    return {
      images: [gymPicture1, gymPicture2, gymPicture3],
      currentIndex:  0,
      transitioning: false,
      autoPlay: true,
    };
  },
  computed: {
    currentImageSrc() {
      return this.images[this.currentIndex];
    },
  },
  methods: {
    nextImage() {
      if (!this.transitioning) {
        this.transitioning = true;
        this.currentIndex = (this.currentIndex +  1) % this.images.length;
        setTimeout(() => {
          this.transitioning = false;
        },  1000);
      }
    },
    prevImage() {
      if (!this.transitioning) {
        this.transitioning = true;
        this.currentIndex = (this.currentIndex -  1 + this.images.length) % this.images.length;
        setTimeout(() => {
          this.transitioning = false;
        },  1000);
      }
    },
    toggleAutoPlay() {
      this.autoPlay = !this.autoPlay;
      if (this.autoPlay) {
        this.startAutoPlay();
      } else {
        clearInterval(this.autoPlayInterval);
      }
    },
    startAutoPlay() {
      this.autoPlayInterval = setInterval(() => {
        this.nextImage();
      },  7000);
    },
  },
  mounted() {
    this.startAutoPlay();
  },
  beforeDestroy() {
    clearInterval(this.autoPlayInterval);
  },
};
</script>

  
<style scoped>

h1,h2,p,li{
  font-weight: var(--font-bold);
}

body {
  width:  100vw;
  height:  100vh;
  margin:  0;
  padding:  0;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #f5f5f5;
}

.slider-image-container {
  width:  100vw;
  height:  100vh;
  overflow: hidden;
  position: relative;
}

.slider-image {
  width:  100%;
  height:  100%;
  object-fit: cover;
  transition: transform  1s ease-in-out;
}

.text-container {
  position: absolute;
  top:  50%;
  left:  50%;
  transform: translate(-50%, -50%);
  color: #fff;
  text-align: center;
  z-index:  10;
  background-color: rgba(0, 0, 0, 0.507);
}


.text-container h1 {
  font-size:  3rem;
  margin-bottom:  1rem;
}

.text-container h2 {
  font-size:  1.5rem;
  margin-bottom:  1rem;
}

.text-container p {
  font-size:  1rem;
  margin-bottom:  2rem;
}

.button-container {
  position: absolute;
  bottom:  20px;
  left:  50%;
  transform: translateX(-50%);
  z-index:  10;
}

button {
  background-color: var(--TeaGreen);
  color: #fff;
  border: none;
  border-radius:  5px;
  padding:  10px  20px;
  cursor: pointer;
  transition: background-color  0.3s ease;
  margin:  0  5px;
}

button:hover {
  background-color: var(--ShinyShamrock);
}

@media (max-width:  768px) {
  .text-container h1 {
    font-size:  2rem;
  }

  .text-container h2 {
    font-size:  1.2rem;
  }

  .text-container p {
    font-size:  0.8rem;
  }
  button{
    display: none;
  }
}
</style>
