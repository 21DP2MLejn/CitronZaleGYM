<template>
    <footer class="gym-footer">
      <div class="footer-top">
        <div class="container">
          <div class="footer-info">
            <h2>CitronZale</h2>
            <p>We're committed to helping you achieve your fitness goals. Join us today!</p>
            <p>Contact Us</p>
            <p>citronzalegym@gmail.com</p>
          </div>
          <div class="footer-links">
            <ul>
              <li><router-link to="/">Home</router-link></li>
              <li><router-link to="/schedule">Schedule</router-link></li>
              <li><router-link to="/prices">Memberships</router-link></li>
              <li><router-link to="/privacy-policy">Privacy Policy</router-link></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2023 Our Gym. All rights reserved.</p>
      </div>
    </footer>
   </template>
   
   <script>
   export default {
    name: 'Footer'
   }
   </script>
   
   <style scoped>
   .gym-footer {
    background-color: var(--Black);
    color: #fff;
    padding: 20px 0;
    position: relative;
    width: 101vw;
    left: -0.5rem;
   }
   
   .footer-top {
    background-color: var(--ShinyShamrock);
    padding: 20px 0;
    width: 101vw;
    position: relative;
    left: -0.5rem;
   }
   
   .top-line {
    position: relative;
    width: 101vw;
    left: -0.5rem;
    height: 3rem;
    background-color: #555;
   }
   
   .container {
    width: 101vw;
    left: -0.5rem;
    height: 30rem;
    background-color: #444;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
   }
   
   .footer-info {
    flex: 1;
    padding: 2rem;
   }
   
   .footer-links {
    flex: 1;
    text-align: right;
    padding: 2rem;
   }
   
   .footer-links ul {
    list-style: none;
    padding: 0;
   }
   
   .footer-links ul li {
    display: inline;
    margin-left: 10px;
   }
   
   .footer-links ul li a {
    color: #fff;
    text-decoration: none;
   }
   
   .footer-bottom {
    background-color: #333;
    text-align: center;
    padding: 10px 0;
   }
   </style>