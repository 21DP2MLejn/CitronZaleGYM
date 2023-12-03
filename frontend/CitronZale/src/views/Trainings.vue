<template>
<main>
<body>
    <div class="navbar">
        <NavBar />
    </div>
    <div class="image-container">
        <div class="title"> <h1>EXPLORE OUR WORKOUTS</h1></div>
        <img src="../assets/Images/group_workout.png">
    </div>
    <div class="card-container">
        <div class="group-training-container">
            <a href="/group-trainings">
                <div class="card group">
                    <h2 class="title" id="group">Group Trainings</h2>
                </div>
            </a>
        </div>
        <div class="personal-training-container">
            <a href="/personal-trainings">
                <div class="card personal">
                    <h2 class="title" id="personal">Personal Trainings</h2>
                </div>
            </a>
        </div>
        <div class="trainers-container">
            <a href="/trainers">
                <div class="card trainers">
                    <h2 class="title" id="trainers">Trainers</h2>
                </div>
            </a>
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

a{
    font-size: 16px;
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
.image-container, .card-container{
    width: 100vw;
    padding: 0;
    margin: 0;
    position: relative;
    left: -8px;
    top: 4.2rem;
    margin-bottom: 4rem;
}

.image-container .title {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   color: var(--White);
   text-align: center;
   z-index: 100;
   width: 26vw;
}

img{
    width: 100%;
    padding: 0;
    margin: 0;
    position: relative;
}

h1{
    font-weight: var(--font-very-bold);
    font-size: 5vw;
    color: var(--ShinyShamrock);
}

.card-container{
    width: 100vw;
    height: auto;
    display: flex;
    align-content: center;
    justify-content: center;
    flex-wrap: wrap ;
}

.card{
   border-radius: 25px;
   margin: 2rem;
   transition: 0.5s;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   width: 20rem;
   height: 30rem;
   background-color: var(--ShinyShamrock);
   margin: 1rem;
   position: relative;
   cursor: pointer;
}

.group{
    background-image: url('../assets/Images/group_workout2.jpg') ;
    background-size: cover;
    filter: brightness(50%);
}

.personal{
    background-image: url('../assets/Images/personal_workout.jpg') ;
    background-size: cover;
    filter: brightness(50%);
}


.trainers{
    background-image: url('../assets/Images/trainers.jpg') ;
    background-size: cover;
    filter: brightness(50%);
}

.card:hover{
    transform: scale(1.02);
    filter: brightness(100%);
    color: var(--ShinyShamrock);
}

.card h2, router-link{
    position: relative;
    font-weight: var(--font-bold);
    text-decoration: none;
}

@media (max-width: 1076px){
    .card{
        width: 15rem;
        height: 25rem;
    }

}

</style>