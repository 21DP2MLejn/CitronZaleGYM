<template>
    <main>
        <div class="navbar-container">
            <NavBar />
        </div>
        <div class="introduction-box-top">
            <div class="content-container">
                <h1>GROUP TRAININGS</h1>
                <p>"Embrace the fusion of tradition and innovation at CitronZale! Discover a blend of time-honored classics and cutting-edge workouts in our exciting new GROUP TRAINING SEASON. Unleash your potential with a selection of over 3000 invigorating exercises each month – a perfect harmony of the old and beloved, alongside the fresh and unseen. Elevate your fitness journey at Citronzale, where every session is a step towards a healthier, happier you! 🍋 #CitronzaleFitness #GroupTrainingAdventures"</p>
                <router-link to="/prices"><button class="membership">BUY MEMBERSHIP </button></router-link>
                <router-link to="/schedule"><button class="schedule">SCHEDULE</button></router-link>
            </div>
        </div>
        <div class="choose-text">
            <h1>CHOOSE YOUR GROUP TRAINING</h1>
        </div>
        <div class="content-group-trainings">
            <div class="flex-container">
                <section>
                    <div class="power-lifting container">
                        <router-link to="/power-lifting" class="card">
                            <div id="power-lifting">
                                <img src="../assets/Images/power-lifting.jpg" alt="powerlifting" >
                            </div>
                        </router-link>
                        <label for="power-lifting">POWER LIFTING</label>
                    </div>
                    <div class="kick-boxing container">
                        <router-link to="/kick-boxing" class="card">
                            <div id="kick-boxing">
                                <img src="../assets/Images/kick-boxing.jpg" alt="kickboxing">
                            </div>
                        </router-link>
                        <label for="kick-boxing">KICK BOXING</label>
                    </div>
                    <div class="core-training container">
                        <router-link to="/core-training" class="card">
                            <div id="core-training">
                                <img src="../assets/Images/core-training.jpg" alt="coretraining">
                            </div>
                        </router-link>
                        <label for="core-training">CORE TRAINING</label>
                    </div>
                </section>
                <section>
                    <div class="indoor-cycling container">
                        <router-link to="/indoor-cycling" class="card">
                            <div id="indoor-cycling">
                                <img src="../assets/Images/indoorcycling.jpg" alt="Indoor Cycling">
                            </div>
                        </router-link>
                        <label for="indoor-cycling">INDOOR CYCLING</label>
                    </div>
                    <div class="zumba container">
                        <router-link to="/zumba" class="card">
                            <div id="zumba">
                                <img src="../assets/Images/zumba.jpg" alt="Zumba">
                            </div>
                        </router-link>
                        <label for="zumba">ZUMBA</label>
                    </div>
                    <div class="circuit-training container">
                        <router-link to="/circuit-training" class="card">
                            <div id="circuit-training">
                                <img src="../assets/Images/body-circle.jpg" alt="Circuit Training">
                            </div>
                        </router-link>
                        <label for="circuit-training">CIRCUIT TRAINING</label>
                    </div>
                </section>
                <section>
                    <div class="yoga container">
                        <router-link to="/yoga" class="card">
                            <div id="yoga">
                                <img src="../assets/Images/yogaimage.jpg" alt="Yoga">
                            </div>
                        </router-link>
                        <label for="yoga">YOGA</label>
                    </div>
                    <div class="pilates container">
                        <router-link to="/pilates" class="card">
                            <div id="pilates">
                                <img src="../assets/Images/pilatesimg.jpg" alt="Pilates">
                            </div>
                        </router-link>
                        <label for="pilates">PILATES</label>
                    </div>
                    <div class="stretch-and-balance container">
                        <router-link to="/stretch-and-balance" class="card">
                            <div id="stretch-and-balance">
                                <img src="../assets/Images/stretch-and-balance.jpg" alt="stretchandbalance">
                            </div>
                        </router-link>
                        <label for="stretch-and-balance">STRETCH & BALANCE</label>
                    </div>
                </section>
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
        }
    }
    </script>
    
    <style scoped>
    .nav-bar{
        position: absolute;
    }
    .footer{
        position: relative;
        top: 20rem;
    }
    .introduction-box-top{
        width: 100vw;
        height: 50rem;
        background-color: var(--TeaGreen);
        position: relative;
        top: 4rem;
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
        overflow: hidden
    }

    .card:hover{
        transform: scale(1.1);
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
        justify-content: center;
        z-index: 0;
    }
    
    .flex-container{
        display: flex;
        align-content: center;
        justify-content: baseline;
    }
    
    #indoor-cycling{
        background-image: url(../assets/Images/indoorcycling.jpg);
        background-repeat: no-repeat;
        background-size: contain;
    }

    .power-lifting img {
    margin-left: -13.5rem; 
    }

    .yoga img{
        width: 700px;
        height: 400px;
        margin-left: -1.5rem; 
    }

    .pilates img{
        width: 300px;
    }

 button {
  background-color: var(--ShinyShamrock);
  color: #fff;
  border: none;
  padding:   0.5rem   1rem;
  border-radius:   5px;
  cursor: pointer;
  transition: background-color   0.3s ease;
  position: relative;
}

button:hover {
  background-color: var(--PastelGreen);
}

button.active {
  background-color: var(--ShinyShamrock);
  color: black;
}

.schedule{
    left: 1rem;
}

    @media (max-width: 768px) {
  .introduction-box-top {
    flex-direction: column;
  }
  
  .video-container video {
    max-width: 100%;
  }

  .content-container {
    width: 100%;
    padding: 1rem;
  }

  .card {
    width: 100%;
    max-width: 300px;
  }

  .flex-container {
    flex-direction: column;
  }
}

@media (max-width: 480px) {
  .button-group {
    flex-direction: column;
  }
  
  label {
    font-size: 1rem;
  }
}
    
    </style>
