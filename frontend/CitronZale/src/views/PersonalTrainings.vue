<template>
<main>
    <NavBar/>
    <div class="top">
      <h1>PERSONAL TRAINING</h1>
    </div>
    <div class="reasons-section-title">
        <h1>REASONS TO CHOOSE PERSONAL TRAINING</h1>
    </div>
    <div class="flex-container">
        <div class="reasons-to-choose-personal-training">
            <div id="personalization" class="reasons-card">
                <h2>Personalized Guidance</h2> 
                <p>At Citronzale Gym, our specialized trainers craft personalized workouts tailored to your unique needs, goals, and fitness level.
                    Experience a customized fitness journey that maximizes your potential.
                    </p>
            </div>
            <div id="expertise" class="reasons-card">
                <h2>Expertise and Knowledge</h2> 
                <p>Our trainers at Citronzale Gym are experts in their specialized areas, armed with additional certifications and in-depth knowledge. 
                    Trust in their expertise to guide you through exercises, techniques, and nutritional strategies specific to your fitness objectives.
                </p>
            </div>
            <div id="efficiency" class="reasons-card">
                <h2>Efficient and Effective Workouts</h2> 
                <p>Achieve your fitness goals efficiently with targeted routines designed by our specialized trainers. 
                    Experience the effectiveness of workouts that address your specific needs, ensuring rapid and lasting results.
                </p>
            </div>
            <div id="motivation" class="reasons-card">
                <h2>Motivation and Accountability</h2> 
                <p>At Citronzale Gym, our trainers provide unwavering support, motivation, and accountability. 
                    Feel the encouragement to stay consistent with your workouts, knowing that someone is dedicated to your success.
                </p>
            </div>
            <div id="injuries" class="reasons-card">
                <h2>Injury Prevention</h2>
                <p>Prioritize safety with our specialized trainers who identify and address potential issues, reducing the risk of injuries. 
                    Learn proper form and techniques to perform exercises safely, especially if you have specific health concerns or past injuries.
                </p> 

            </div>
            <div id="educational" class="reasons-card">
                <h2>Education and Empowerment</h2> 
                <p>Citronzale Gym values education. Our specialized trainers empower you with knowledge about fitness principles, nutrition, and overall wellness. 
                    Make informed decisions that lead to long-term success beyond your training sessions.
                </p>
            </div>
        </div>
    </div>
    <div class="section-container">
        <div class="select-trainer-section-title">
            <h1>SELECT YOUR TRAINER</h1>
            <p>Choose the best trainer for your location and the most suitable for your desired goal</p>
        </div>
        <div class="select-trainer">
            <select v-model="selectedLocation" name="gym-location" id="locations">
              <option value="allclubs">All clubs</option>
              <option value="teika">Teika</option>
              <option value="ogre">Ogre</option>
              <option value="bolderaja">Bolderaja</option>
          </select>
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
    </div>
    <div class="trainers-container">
        <div class="trainer-container">
            <label for="teikapersonaltrianer" v-show="selectedLocation === 'teika' || selectedLocation === 'allclubs'">Max Silver</label>
            <div id="teikapersonaltrianer" class="card" v-show="selectedLocation === 'teika' || selectedLocation === 'allclubs'"></div>
        </div>

        <div class="trainer-container">
            <label for="ogrepersonaltrainer" v-show="selectedLocation === 'ogre' || selectedLocation === 'allclubs'">Mārcis Sedvalds</label>
            <div id="ogrepersonaltrainer" class="card" v-show="selectedLocation === 'ogre' || selectedLocation === 'allclubs'"></div>
        </div>

        <div class="trainer-container">
            <label for="bolderajapersonaltrainer" v-show="selectedLocation === 'bolderaja' || selectedLocation === 'allclubs'">Guntis Ulmanis</label>
            <div id="bolderajapersonaltrainer" class="card" v-show="selectedLocation === 'bolderaja' || selectedLocation === 'allclubs'"></div>
        </div>
    </div>
    <div class="footer">
      <Footer />
    </div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import Footer from '../components/Footer.vue';

export default {
    components:{
        NavBar,
        Footer,
    },
    data() {
        return {
            selectedWorkoutCategory: 'allworkouts',
            selectedLocation: 'allclubs',
            teika: 'teika',
            ogre:'ogre',
            bolderaja: 'bolderaja'
        }
    },
    methods: {
      updateTrainers() {
        console.log('Location:', this.selectedLocation);
        console.log('Training Type:', this.selectedTrainingType);
  
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
    },
};
</script>

<style scoped>

.footer{
  position: relative;
  top: 20rem;
}
.trainer-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.select-trainer, .select-trainer-section-title{
    position: relative;
    top: 4rem;
    left: 2rem;
}
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

  .trainers-container{
    position: relative;
    top: 3rem;
    display: flex;
    align-content: center;
    justify-content: center;
    flex-wrap: wrap;
    flex-flow: row;
    width: 102%;
    height: 102%;
    padding-top: 5rem;
    left: -1rem;
  }

  .trainers-container label {
    font-size: 1.2em;
    font-weight: var(--font-bold);
    display: block;
    margin-top: 0.5rem;
  }


  .card{
    width: 18.75rem;
    height: 25rem;
    background-color: black;
    margin: 1rem;
    transition: 0.5s;
    z-index: 1;
    display: block;
  }

  .reasons-card{
    width: 20rem;
    height: auto;
    background-color: var(--ShinyShamrock);
    padding: 1rem;
    position: relative;
    margin: 0.5rem;
  }

  .reasons-to-choose-personal-training{
    display: flex;
    align-content: center;
    justify-content: center;
    flex-flow: row;
    flex-wrap: wrap;
    width: 90rem;
  }

  .flex-container{
    display: flex;
    align-content: center;
    justify-content: center;
    position: relative;
    margin-top: 10rem;
  }

  .reasons-section-title{
    position: relative;
    top: 7rem;
    left: 2rem;
  }

.card:hover{
    transform: scale(1.1);
    border-color: var(--ShinyShamrock);
    box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
    outline: none;
}


</style>