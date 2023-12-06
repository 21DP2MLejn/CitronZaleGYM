<template>
<main>
    <NavBar />
    <div class="introduction-box-top">
        <div class="content-container">
            <h1>GROUP TRAININGS</h1>
            <p>"Embrace the fusion of tradition and innovation at CitronZale! Discover a blend of time-honored classics and cutting-edge workouts in our exciting new GROUP TRAINING SEASON. Unleash your potential with a selection of over 3000 invigorating exercises each month – a perfect harmony of the old and beloved, alongside the fresh and unseen. Elevate your fitness journey at Citronzale, where every session is a step towards a healthier, happier you! 🍋 #CitronzaleFitness #GroupTrainingAdventures"</p>
            <button>BUY MEMBERSHIP</button>
            <button>SCHEDULE</button>
        </div>
        <div class="video-container">
            <video width="500" height="500" controls autoplay>
                <source src="grouptrainings.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="choose-text">
        <h1>CHOOSE YOUR GROUP TRAINING</h1>
    </div>
    <div class="content-group-trainings">
        <div class="flex-container">
            <section>
                <div class="power-lifting container">
                    <div id="power-lifting" class="card">
                        <img src="../assets/Images/power-lifting.jpg" alt="powerlifting">
                    </div>
                    <label for="power-lifting">POWER LIFTING</label>
                </div>
                <div class="kick-boxing container">
                    <div id="kick-boxing" class="card">
                        <img src="../assets/Images/kick-boxing.jpg" alt="kickoxuign">
                    </div>
                    <label for="kick-boxing">KICK BOXING</label>
                </div>
                <div class="core-training container">
                    <div id="core-training" class="card">
                        <img src="../assets/Images/core-training.jpg" alt="coretraining">
                    </div>
                    <label for="core-training">CORE TRAINING</label>
                </div>
            </section>
            <section>
                <div class="indoor-cycling container">
                    <div id="indoor-cycling" class="card"></div>
                    <label for="indoor-cycling">INDOOR CYCLING</label>
                </div>
                <div class="zumba container">
                    <div id="zumba" class="card">
                        <img src="../assets/Images/zumba.jpg" alt="">
                    </div>
                    <label for="zumba">ZUMBA</label>
                </div>
                <div class="circuit-training container">
                    <div id="circuit-training" class="card">
                        <img src="../assets/Images/body-circle.jpg" alt="">
                    </div>
                    <label for="circuit-training">CIRCUIT TRAINING</label>
                </div>
            </section>
            <section>
                <div class="yoga container">
                    <div id="yoga" class="card">
                    </div>
                    <label for="yoga">YOGA</label>
                </div>
                <div class="pilates container">
                    <div id="pilates" class="card">
                    </div>
                    <label for="pilates">PILATES</label>
                </div>
                <div class="stretch-and-balance container">
                    <div id="stretch-and-balance" class="card">
                        <img src="../assets/Images/stretch-and-balance.jpg" alt="stretchandbalance">
                    </div>
                    <label for="stretch-and-balance">STRETCH & BALANCE</label>
                </div>
            </section>
        </div>
    </div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';

export default {
    components:{
        NavBar,
    }
}
</script>

<style scoped>

    .introduction-box-top{
        width: 100vw;
        height: 50rem;
        background-color: var(--TeaGreen);
        position: relative;
        top: 3rem;
        left: -0.5rem;
        padding: 1rem;
        display: inline-block;
    }

    .video-container{
        position: absolute;
        right: 20rem;
        top: 10rem;
    }

    .content-container{
        width: 40rem;
        position: relative;
        top: 10rem;
        display: grid;
        left: 5rem;
        display: inline-block;
    }
  .card {
       width: 18.75rem;
       height: 25rem;
       background-color: black;
       margin: 2rem;
       transition: 0.5s;
       z-index: 1;
    }

   label {
       font-size: 1.2em;
       font-weight: var(--font-bold);
   }

   .content-group-trainings{
        display: flex;
        align-content: center;
        justify-content: center;

   }

   .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 0;
    }

    .flex-container {
      display: flex;
      justify-content: space-between;
      position: relative;
      top: 10rem;
    }

    .choose-text{
        position: relative;
        top: 10rem;
        justify-content: center;
        align-content: center;
        display: flex;
    }

    .card:hover{
        transform: scale(1.1);
        border-color: var(--ShinyShamrock);
        box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
        outline: none;
    }


    
</style>