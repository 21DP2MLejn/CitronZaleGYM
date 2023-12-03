<template>
<main>
<body>
    <div class="navbar">
        <NavBar />
    </div>
    <div class="image-container">
        <div class="title"> <h1>EXPLORE OUR CLUBS</h1></div>
        <img src="../assets/Images/clubs_image.jpg">
    </div>
    <div class="text-container">
        <h2>FIND CITRONZALE GYM CLUB THAT SUITS YOU BEST</h2>
    </div>
    <div class="club-container">
        <div class="club a">
            <h2>BOLDERAJA</h2>
            <button>Visit Club Page</button>
            <img src="../assets/Images/gym_picture2.jpg" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.978264435257!2d24.038861847822393!3d57.02644165190223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eec5b678486d11%3A0xdc8a5e06a1f43882!2sLaTS!5e0!3m2!1slv!2slv!4v1700676578243!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="club b">
            <h2>TEIKA</h2>
            <button>Visit Club Page</button>
            <img src="../assets/Images/gym_picture4.jpg" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.657637876182!2d24.160287877167224!3d56.97179679744783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf4e556c2eed%3A0xbdd46181f8ce2c63!2sKebabish%20Riga!5e0!3m2!1slv!2slv!4v1700676535122!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="club c">
            <h2>OGRE</h2>
            <button>Visit Club Page</button>
            <img src="../assets/Images/gym_picture7.jpg" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2183.4092401694284!2d24.59378547715951!3d56.82176790915351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e925b8c035bf4f%3A0x2283cc460a35a7c0!2sKebab%20Spot!5e0!3m2!1slv!2slv!4v1700676447259!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>

    </div>
</body>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';

export default{
    components:{
        NavBar,
    }
}
</script>

<style scoped>

button {
  --b: 3px;   /* border thickness */
  --s: .15em; /* size of the corner */
  
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
    font-size: 1.5rem;
    cursor: pointer;
    border: none;
    margin: .1em;
    transition: 0.5s;
    position: relative;
    top: -4px;
}

.text-container{
    margin-top: 12rem;
    margin-bottom: 8rem;
    display: flex;
    align-content: center;
    justify-content: center;
}

.club-container{
    display: flex;
    justify-content: center;
    align-content: center;
}
.club {
   height: 33%;
   width: 100%;
   background-color: var(--ShinyShamrock);
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   margin: 1.2rem;
}

.club img {
  width: 100%;
  height: auto;
  object-fit: contain;
  align-self: flex-start;
}

.club h2{
    color: var(--black);
    font-size: 28px;
}


body{
    background-color: var(--TeaGreen);
    position: absolute;
    padding: 0;
    margin: 0;
    top: 0;
    left: 0;

}

main{
    padding: 0;
    margin: 0;

}

.image-container{
    width: 100vw;
    padding: 0;
    margin: 0;
    position: relative;
    top: 4.2rem;
    margin-bottom: 4rem;
}

h1{
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    color: var(--ShinyShamrock);
}

h2{
    font-size: 48px;
    color: var(--ShinyShamrock);
    font-weight: var(--font-bold);    
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
}

img{
    width: 100vw;
    height: auto;
    padding: 0;
    margin: 0;
    position: relative;
    height: 45rem;
}


@media (max-width: 600px) {
 .club-container {
   flex-direction: column;
 }
 .club img {
   width: 100%;
   height: auto;
   object-fit: contain;
   align-self: flex-start;
   max-height: 200px;
}

h1, h2 {
   font-size: 1.5em;
}

}

</style>