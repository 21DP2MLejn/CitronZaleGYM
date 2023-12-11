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
        </div>
        <div class="trainers">
            <div class=""></div>
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

.top{
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

.top h1{
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    color: var(--ShinyShamrock); position: absolute;
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
</style>