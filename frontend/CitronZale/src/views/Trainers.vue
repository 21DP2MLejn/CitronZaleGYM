<template>
<main>
  <NavBar/>
  <div class="top">
      <h1>MEET OUR TRAINERS</h1>
  </div>
  <div class="information">
      <div class="description">
          <h2>Take a look at our trainers</h2>
          <p>In "CitronZale" clubs there is a huge variety of trainers, each having a specific specialisation of their own.</p>
          <label for="locations">Clubs</label>
          <select v-model="selectedLocation" name="gym-location" id="locations">
              <option value="allclubs">All clubs</option>
              <option value="teika">Teika</option>
              <option value="ogre">Ogre</option>
              <option value="bolderaja">Bolderaja</option>
          </select>
          <label for="type">Type of Training</label>
          <select v-model="selectedTrainingType" name="trainingtype" id="type">
              <option value="alltraining">All trainings</option>
              <option value="personal">Personal trainings</option>
              <option value="group">Group trainings</option>
          </select>
          <label for="workout"></label>
          <select v-model="selectedWorkoutCategory" name="workoutcategory" id="workout">
              <option value="allworkouts">All Workouts</option>
              <option value="yoga">Yoga</option>
              <option value="kickboxing">Kick Boxing</option>
              <option value="pilates">Pilates</option>
              <option value="core">Core Training</option>
              <option value="zumba">Zumba</option>
              <option value="stretchbalance">Stretch & Balance</option>
              <option value="powerlifting">Power Lifting</option>
              <option value="indoorcycling">Indoor Cycling</option>
              <option value="circuittraining">Circuit Training</option>
          </select>
        </div>
        <div class="trainers-container">
          <div class="trainer-container" id="teika-personal-container" v-show="selectedLocation === 'teika' || selectedLocation === 'allclubs'">
            <label for="teika-personal">Max Silver</label>
            <div id="teika-personal" class="trainer"></div>
          </div>
  
          <div class="trainer-container" id="teika-group-container" v-show="selectedLocation === 'teika' || selectedLocation === 'allclubs'">
            <label for="teika-group">Diana Payne</label>
            <div id="teika-group" class="trainer"></div>
          </div>
  
          <div
            class="trainer-container"
            id="ogre-personal-container"
            v-show="selectedLocation === 'ogre' || selectedLocation === 'allclubs'">
            <label for="ogre-personal">Mārcis Sedvalds</label>
            <div id="ogre-personal" class="trainer"></div>
          </div>
  
          <div
            class="trainer-container"
            id="ogre-group-container"
            v-show="selectedLocation === 'ogre' || selectedLocation === 'allclubs'"
          >
            <label for="ogre-group">Andrejs Zariņš</label>
            <div id="ogre-group" class="trainer"></div>
          </div>
  
          <div
            class="trainer-container"
            id="bolderaja-personal-container"
            v-show="selectedLocation === 'bolderaja' || selectedLocation === 'allclubs'"
          >
            <label for="bolderaja-personal">Guntis Ulmanis</label>
            <div id="bolderaja-personal" class="trainer"></div>
          </div>
  
          <div
            class="trainer-container"
            id="bolderaja-group-container"
            v-show="selectedLocation === 'bolderaja' || selectedLocation === 'allclubs'"
          >
            <label for="bolderaja-group">Kārlis Ulmanis</label>
            <div id="bolderaja-group" class="trainer"></div>
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
    },
    data() {
      return {
        selectedLocation: 'allclubs',
        selectedTrainingType: 'alltraining',
        selectedWorkoutCategory: 'allworkouts',
        teika: 'teika',
        ogre: 'ogre',
        bolderaja: 'bolderaja',
      };
    },
    methods: {
      updateTrainers() {
        console.log('Location:', this.selectedLocation);
        console.log('Training Type:', this.selectedTrainingType);
        console.log('Workout Category:', this.selectedWorkoutCategory);
  
        this.fetchAndUpdateTrainers();
      },
      fetchAndUpdateTrainers() {
        console.log('Fetching and updating trainers...');
      },
    },
        watch: {
            selectedLocation: {
                handler: 'updateTrainers',
                immediate: true,
            },
            selectedTrainingType: 'updateTrainers',
            selectedWorkoutCategory: 'updateTrainers',
        },
  };
  </script>
  
  <style scoped>
  .top {
    width: 102%;
    height: 40rem;
    background-color: var(--TeaGreen);
    position: relative;
    left: -1rem;
    top: 3.3rem;
    padding: 1rem;
    display: flex;
    align-content: center;
    justify-content: center;
  }
  
  .top h1 {
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    color: var(--ShinyShamrock);
    position: absolute;
    top: 50%;
    left: 48%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 15rem;
    text-align: center;
  }
  
  .trainer {
    width: 18.75rem;
    height: 25rem;
    background-color: black;
    margin: 1rem;
    transition: 0.5s;
    z-index: 1;
  }
  
  .trainers-container {
    display: flex;
    align-content: center;
    justify-content: center;
    flex-wrap: wrap;
  }
  .trainers-container label {
    font-size: 1.2em;
    font-weight: var(--font-bold);
    display: flex;
  }
  
  .trainer-container {
    text-align: center;
  }
  </style>