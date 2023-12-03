<template>
<main>
    <div>
        <NavBar />
    </div>
    <div class="image-container">
        <div class="title"> <h1>FEATURING THE BEST PRICES</h1></div>
    </div>

    <div class="select-period">
        <button id="all deals period" @click="changeColor('all')" >All deals</button>
        <button id="longterm period" @click="changeColor('longterm')">Long-term</button>
        <button id="indefinite period" @click="changeColor('indefinite')">Indefinite period</button>
    </div>
    <div class="prices-container">
        <div class="card regular" id="regularsub">
            <h2>Regular</h2>
            <h3>Price: 14.99$</h3>
            <p>Advantages</p>
            <ul>
                <li>Unlimited visit 24/7</li>
                <li>Membership freeze</li>
                <li>Rewrite membership to another person</li>
                <li>Minimal period of contract: 12months</li>
            </ul>
            <button id="buyregular">BUY NOW</button>
        </div>
        <div class="card flex" id="flexsub">
            <h2>Flex</h2>
            <h3>Price: 19.99$</h3>
            <p>Advantages</p>
            <ul>
                <li>Unlimited visit 24/7</li>
                <li>Membership freeze</li>
                <li>Rewrite membership to another person</li>
                <li>Intro training</li>
                <li>Minimal period of contract: 12months</li>
            </ul>
            <button id="buyflex"> BUY NOW </button>
        </div>
        <div class="card super" id="supersub">
            <h2>Super</h2>
            <h3>Price: 24.99$</h3>
            <p>Advantages</p>
            <ul>
                <li>Unlimited visit 24/7</li>
                <li>Membership freeze</li>
                <li>Rewrite membership to another person</li>
                <li>Intro training</li>
                <li>Group trainings</li>
                <li>Sauna</li>
                <li>Unlimited period of contract</li>
            </ul>
            <button id="buysuper">BUY NOW</button>
        </div>
        <div class="card deluxe" id="deluxesub">
            <h2>Deluxe</h2>
            <h3>Price: 29.99$</h3>
            <p>Advantages</p>
            <ul>
                <li>Unlimited visit 24/7</li>
                <li>Membership freeze</li>
                <li>Rewrite membership to another person</li>
                <li>Intro training</li>
                <li>Group trainings</li>
                <li>Sauna</li>
                <li>Pool access</li>
                <li>Water refill every 20 minutes</li>
                <li>Unlimited period of contract</li>
            </ul>
            <button id="buydeluxe">BUY NOW</button>
        </div>
    </div>
    <div class="trial">
        <FreeTrial />
    </div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import FreeTrial from '../components/FreeTrial.vue';
export default {
  components:{
    NavBar,
    FreeTrial,
  },
  methods: {
  changeColor(buttonClicked) {
 var alldeals = document.getElementById('all deals period')
 var longtermButton = document.getElementById('longterm period');
 var indefiniteButton = document.getElementById('indefinite period');
 var regulersub = document.getElementById('regularsub');
 var flexsub = document.getElementById('flexsub');
 var supersub = document.getElementById('supersub');
 var deluxesub = document.getElementById('deluxesub');

 if (buttonClicked === 'longterm') {
  longtermButton.style.backgroundColor = 'var(--ShinyShamrock)';
  longtermButton.style.color = 'black';
  indefiniteButton.style.backgroundColor = '';
  indefiniteButton.style.color = '';
  alldeals.style.backgroundColor = '';
  alldeals.style.color = '';
  regulersub.style.display = 'block';
  flexsub.style.display = 'block';
  supersub.style.display = 'none';
  deluxesub.style.display = 'none';

 } else if (buttonClicked === 'indefinite') {
  indefiniteButton.style.backgroundColor = 'var(--ShinyShamrock)';
  indefiniteButton.style.color = 'black';
  longtermButton.style.backgroundColor = '';
  longtermButton.style.color = '';
  alldeals.style.backgroundColor = '';
  alldeals.style.color = '';
  regulersub.style.display = 'none';
  flexsub.style.display = 'none';
  supersub.style.display = 'block';
  deluxesub.style.display = 'block';

 } else if (buttonClicked === 'all'){
  alldeals.style.backgroundColor = 'var(--ShinyShamrock)';
  alldeals.style.color = 'black';
  longtermButton.style.backgroundColor = '';
  longtermButton.style.color = '';
  indefiniteButton.style.backgroundColor = '';
  indefiniteButton.style.color = '';
  regulersub.style.display = 'block';
  flexsub.style.display = 'block';
  supersub.style.display = 'block';
  deluxesub.style.display = 'block';
 }
},
    mounted() {
      this.changeColor("longterm")
    },
  }
};
</script>

<style scoped>

button {
  --b: 3px;   
  --s: .15em;
  
  padding: calc(.05em + var(--s)) calc(.3em + var(--s));
  color: var(--black);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--black) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .2em;
}
button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: var(--black);
  outline-offset: .05em;
}
button:active {
  background: var(--black);
  color: var(--TeaGreen);
}

button{
    font-size: 1.4rem;
    cursor: pointer;
    border: none;
    margin: .1em;
    transition: 0.5s;
    position: relative;
}
.select-period {
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: 32px;
   padding: 1.1rem;
   width: 25%;
   background-color: transparent;
   position: relative;
   top: 5rem;
   margin: 0 auto;
   height: 4rem;
   flex-wrap: wrap;
   border: 1px solid;
   border-color: var(--ShinyShamrock);
   box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
   outline: none; 
}



.select-period button{
    height: 2.8rem;
    margin: 2px;
    background-color: transparent;
    border-radius: 2rem;
}

  .prices-container {
    display: flex;
    align-content: center;
    justify-content: center;
    flex-direction: row;
    position: relative;
    top: 5rem;
    flex-wrap: wrap; 
  }

  .card {
    max-width: 22rem; 
    width: 100%; 
    background-color: var(--ShinyShamrock);
    position: relative;
    margin: 2rem;
    border-radius: 2rem;
    padding: 1rem;
  }

  .trial{
    position: relative;
    top: 20rem;
    left: -1rem;
    margin: 0;
    padding: 0;

  }

.image-container{
    width: 100vw;
    padding: 0;
    margin: 0;
    position: relative;
    top: 4.2rem;
    margin-bottom: 4rem;
    background-color: var(--TeaGreen);
    height: 40rem;
    text-align: center;
    left: -1rem;
}


.image-container .title {
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 text-align: center;
 z-index: 100;
 width: 23vw;
 font-weight: var(--font-very-bold);
 display: flex;
 justify-content: center;
 align-items: center;
}


img{
    width: 100vw;
    height: auto;
    padding: 0;
    margin: 0;
    position: relative;
    height: 45rem;
}

.image-container h1{
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    color: var(--ShinyShamrock);
}

.image-container h2{
    font-size: 48px;
    color: var(--ShinyShamrock);
    font-weight: var(--font-bold);    
}


  @media (max-width: 768px) {
    .card {
      max-width: 100%;
    }

    .title {
      font-size: 20rem;
  }
  .select-period button {
    font-size: 1rem;
    padding: 0.5rem;
 }

 .select-period{
  width: 75%;
 }

}
</style>