<template>
<main>
<body>
    <NavBar />
    <div class="location-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.978264435257!2d24.038861847822393!3d57.02644165190223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eec5b678486d11%3A0xdc8a5e06a1f43882!2sLaTS!5e0!3m2!1slv!2slv!4v1700676578243!5m2!1slv!2slv" width="102%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="main-container">
        <div class="title-container">
            <h1>Welcome to Bolderaja Club</h1>
        </div>
        <div class="description-container">
            <h2>Hello, Welcome to the insane bolderaja club</h2>
            <p>
                Nestled in the picturesque coastal town of Bolderaja, the gym stands as a beacon of health and wellness, seamlessly blending into the natural beauty that surrounds it. Bathed in natural light streaming through expansive windows, the interior of this fitness haven exudes an inviting and energetic atmosphere. State-of-the-art equipment lines the sleek, modern space, catering to fitness enthusiasts of all levels. The gym's thoughtful design incorporates panoramic views of the Baltic Sea, creating an inspiring backdrop for workouts. From invigorating cardio sessions to strength training with a view, every visit becomes a sensory experience. The gym's commitment to holistic well-being extends beyond its facilities, with knowledgeable trainers and a supportive community fostering a sense of camaraderie among members. Whether one is a seasoned fitness enthusiast or a beginner taking the first steps on their wellness journey, this beautiful gym in Bolderaja provides a harmonious blend of serenity and motivation for a truly enriching fitness experience.
            </p>
        </div>
        <div class="images-container">
            <div class="image tl"></div>
            <div class="image tr"></div>
            <div class="image bl"></div>
            <div class="image br"></div>
        </div>
    </div>
    <div class="footer">
        <Footer />
    </div>
</body>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import Footer from '../components/Footer.vue';
export default{
    components:{
        NavBar,
        Footer,
    }
}
</script>

<style scoped>
.main-container{
    background-color: var(--TeaGreen);
    width: 102%;
    height: 70rem;
    position: relative;
    left: -1%;
}

.title-container{
    z-index: 2;
    position: relative;
    width: 102%;
    height: 20rem;
    position: relative;
    left: -1%;
    display: flex;
    align-content: center;
    justify-content: center;
}

.title-container h1{
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    color: var(--Black);
    position: relative;
    top: 1rem;
}

.location-container{
    position: relative;
    left: -1%;
}

.description-container{
    width: 100%;
    height: auto;
    position: relative;
    padding: 2rem;
}
.images-container{
    width: 100%;
    height: 50%;
    display: flex;
    align-content: center;
    justify-content: center;
}

.image{
    width: 30rem;
    height: 20rem;
    background-color: black;
    margin: 1rem;
}

.footer{
    position: absolute;
    left: 0.5rem;
}

</style>