<template>
    <main>
    <body>
        <NavBar />
        <div class="location-container">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.657637876182!2d24.160287877167224!3d56.97179679744783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf4e556c2eed%3A0xbdd46181f8ce2c63!2sKebabish%20Riga!5e0!3m2!1slv!2slv!4v1700676535122!5m2!1slv!2slv" width="102%" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="main-container">
            <div class="title-container">
                <h1>Welcome to Teika Club</h1>
            </div>
            <div class="description-container">
                <h2>Hello, Welcome to the insane teika club</h2>
                <p>
                    In the vibrant neighborhood of Teika, a fitness club stands as a beacon of health and community. The club's contemporary architecture harmonizes with the dynamic energy of Teika, creating an inviting space for fitness enthusiasts. Sunlight filters through expansive windows, illuminating the diverse array of exercise zones. Modern equipment caters to a spectrum of workout preferences, from high-intensity training to rejuvenating mind-body practices. Beyond its physical offerings, the Teika club fosters a sense of inclusivity and encouragement. Trainers and members alike contribute to a supportive environment, making each visit an opportunity for personal growth and camaraderie. Teika's fitness club encapsulates the essence of holistic well-being in a lively urban setting.
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
    height: 100rem;
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
    flex-wrap: wrap;
    position: relative;
    top: 1rem;
}

.image{
    width: 40rem;
    height: 20rem;
    background-color: black;
    margin: 1rem;
}

.footer{
    position: absolute;
    left: 0.5rem;
    top: 140rem;
}

.tr{
    background-image: url(../assets/Images/gym_picture9.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}

.tl{
    background-image: url(../assets/Images/gym_picture10.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}


.bl{
    background-image: url(../assets/Images/gym_picture11.jpg);
    background-size: cover;
    background-repeat: no-repeat;

}

.br{
    background-image: url(../assets/Images/gym_picture12.jpg);
    background-size: cover;
    background-repeat: no-repeat;
}
    
</style>