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
        </div>
    </div>
    <div class="button-container">
      <router-link to="/checkout-details"><button id="buyflex"> BUY NOW </button></router-link>
    </div>
    <div class="trial">
        <FreeTrial />
    </div>
    <div class="footer">
      <Footer />
    </div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import FreeTrial from '../components/FreeTrial.vue';
import Footer from '../components/Footer.vue';
export default {
  components:{
    NavBar,
    FreeTrial,
    Footer
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
/* General Styles */
body {
  font-family: 'Arial', sans-serif;
  margin:  0;
  padding:  0;
  background-color: var(--TeaGreen);
}

.nav-bar {
  background-color: var(--ShinyShamrock);
  padding:  1rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow:  0  2px  4px rgba(0,  0,  0,  0.1);
}

.image-container {
  width:  102%;
  height:  400px;
  background-color: var(--TeaGreen);
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  overflow: hidden;
  left: -1%;
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

.select-period {
  display: flex;
  justify-content: center;
  gap:  1rem;
  margin-top:  2rem;
}

.select-period button {
  background-color: var(--ShinyShamrock);
  color: #fff;
  border: none;
  padding:  0.5rem  1rem;
  border-radius:  5px;
  cursor: pointer;
  transition: background-color  0.3s ease;
}

.select-period button:hover {
  background-color: var(--PastelGreen);
}

.prices-container {
  display: flex;
  justify-content: center;
  gap:  2rem;
  flex-wrap: wrap;
  margin-top:  2rem;
}

.card {
  background-color: var(--ShinyShamrock);
  padding:  1rem;
  border-radius:  10px;
  width:  300px;
  box-shadow:  0  4px  8px rgba(0,  0,  0,  0.1);
  transition: transform  0.3s ease;
}

.card:hover {
  transform: scale(1.05);
}

.card h2 {
  margin-bottom:  1rem;
}

.card ul {
  list-style: none;
  padding:  0;
}

.card ul li {
  margin-bottom:  0.5rem;
}

.button-container {
  display: flex;
  justify-content: center;
  margin-top:  2rem;
}

.button-container button {
  background-color: var(--ShinyShamrock);
  color: #fff;
  border: none;
  padding:  0.5rem  1rem;
  border-radius:  5px;
  cursor: pointer;
  transition: background-color  0.3s ease;
}

.button-container button:hover {
  background-color: var(--PastelGreen);
}

.trial {
  margin-top:  2rem;
  left: -1%;
}

.footer {
  background-color: var(--TeaGreen);
  text-align: center;
  color: #fff;
  position: relative;
  bottom:  0;
  width:  100%;
}

/* Responsive Adjustments */
@media (max-width:  768px) {
  .select-period,
  .prices-container {
    flex-direction: row;
    align-items: center;
  }

  .card {
    width:  100%;
    margin-bottom:  1rem;
  }
}
</style>
