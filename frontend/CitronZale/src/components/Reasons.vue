<template>
    <div class="container">
      <h1>3 Reasons to join CitronZale</h1>
      <div class="cards">
        <div class="card">
          <img src="../assets/Images/247.jpg" alt="image">
          <h3>OPEN 24/7</h3>
          <p>Workout when you want, our gym is open 24/7</p>
        </div>
        <div class="card">
          <img src="../assets/Images/coach.jpg" alt="image">
          <h3>Professional Coaches</h3>
          <p>We provide specialized coaches to help you achieve your goals</p>
        </div>
        <div class="card">
          <img src="../assets/Images/dumbell.jpg" alt="image">
          <h3>Spacious Workout Zone</h3>
          <p>Don't worry about bumping into others; our workout zones are spacious</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'reasons'
  }
  </script>
  
  <style scoped>
  h1 {
    text-align: center;
    font-size: 2rem;
    margin-top: 2rem;
  }
  
  .container {
    width: 100vw;
    background-color: var(--TeaGreen);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem;
    position: relative;
    top: 10rem;
    height: 45rem;
    padding-top: 15rem;
  }
  
  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .card {
    width: 20rem;
    background-color: var(--ShinyShamrock);
    margin: 1rem;
    padding: 1rem;
    border-radius: 1.5rem;
    text-align: center;
  }
  
  img {
    width: 5rem;
    height: 5rem;
    border-radius: 1rem;
  }
  
  @media (max-width: 991px) {

  }
  
  @media (max-width: 721px) {
    .container {
      top: 8rem;
    }
  }
  </style>