<template>
    <main>
    <body>
        <NavBar />
        <div class="location-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2183.4092401694284!2d24.59378547715951!3d56.82176790915351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e925b8c035bf4f%3A0x2283cc460a35a7c0!2sKebab%20Spot!5e0!3m2!1slv!2slv!4v1700676447259!5m2!1slv!2slv" width="102%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="main-container">
            <div class="title-container">
                <h1>Welcome to Ogre Club</h1>
            </div>
            <div class="description-container">
                <h2>Hello, Welcome to the insane ogre club</h2>
                <p>
                    Nestled in the heart of Ogre, the local gym is a testament to wellness in an idyllic setting. Surrounded by lush greenery, the facility seamlessly integrates with the town's natural beauty. Large windows frame the workout space, flooding it with natural light and offering glimpses of the scenic Ogre River. The gym boasts cutting-edge equipment and a design that balances functionality with aesthetics. Whether engaged in vigorous workouts or enjoying panoramic views during yoga sessions, members find solace and inspiration in this fitness sanctuary. Knowledgeable trainers and a warm community atmosphere further enhance the overall experience, making the Ogre gym a haven for individuals pursuing health and fitness.
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