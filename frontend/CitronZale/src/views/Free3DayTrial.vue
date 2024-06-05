<template>
  <div class="content-container">
    <NavBar />
    <main>
      <div class="main-container">
        <div class="header-container">
          <h1>Free 3 Day Trial</h1>
        </div>
        <div class="description-container">
          <p>Sign up now for a free 3 day trial and experience our premium services.</p>
        </div>
        <div class="benefits-container">
          <h2>Why Choose Our Free Trial?</h2>
          <ul>
            <li>Access to all gym facilities</li>
            <li>Join any group classes</li>
            <li>Personal training session included</li>
            <li>Free access to sauna and pool</li>
          </ul>
        </div>
        <div class="how-it-works-container">
          <h2>How It Works</h2>
          <ol>
            <li>Sign up with your email address</li>
            <li>Receive a confirmation email with your trial code</li>
            <li>Visit our gym and enjoy all the benefits for 3 days</li>
          </ol>
        </div>
        <div class="testimonials-container">
          <h2>What Our Members Say</h2>
          <div class="testimonial">
            <p>"This gym is amazing! The free trial gave me a perfect opportunity to see what they offer. Highly recommended!"</p>
            <span>- Alex</span>
          </div>
          <div class="testimonial">
            <p>"I loved the group classes and the personal training session. The staff is very friendly and professional."</p>
            <span>- Maria</span>
          </div>
        </div>
        <div class="form-container">
          <input type="email" placeholder="Enter your email address" v-model="email" />
          <button @click="sendTrialEmail">Get Free Trial</button>
        </div>
      </div>
    </main>
    <div class="footer">
      <Footer />
    </div>
  </div>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import Footer from '../components/Footer.vue';
import axios from 'axios';

export default {
  components: {
    NavBar,
    Footer,
  },
  data() {
    return {
      email: '',
      message: '',
    };
  },
  methods: {
    async sendTrialEmail() {
      try {
        const response = await axios.post('/send-trial-email', {
          email: this.email,
        });

        this.message = response.data.message;
      } catch (error) {
        console.error('Error:', error);
        this.message = 'An error occurred. Please try again.';
      }
    },
  },
};
</script>
  
  <style scoped>
  body {
    background-color: var(--TeaGreen);
  }
  
  .header-container h1 {
    font-weight: var(--font--very-bold);
    font-size: 5vw;
    text-align: center;
  }
  
  .description-container p {
    font-size: 1.2rem;
    text-align: center;
  }
  
  .benefits-container, .how-it-works-container, .testimonials-container {
    margin: 2rem 0;
    text-align: center;
  }
  
  .benefits-container h2, .how-it-works-container h2, .testimonials-container h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
  }
  
  .benefits-container ul, .how-it-works-container ol {
    list-style: none;
    padding: 0;
  }
  
  .benefits-container ul li, .how-it-works-container ol li {
    font-size: 1rem;
    margin-bottom: 0.5rem;
  }
  
  .testimonials-container .testimonial {
    background-color: var(--ShinyShamrock);
    color: #fff;
    padding: 1rem;
    border-radius: 10px;
    margin: 1rem 0;
  }
  
  .testimonials-container .testimonial span {
    display: block;
    margin-top: 0.5rem;
  }
  
  .form-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 2rem;
  }
  
  .form-container input {
    padding: 0.5rem;
    margin-bottom: 1rem;
    border-radius: 5px;
    border: 1px solid var(--ShinyShamrock);
    width: 300px;
  }
  
  .form-container button {
    background-color: var(--ShinyShamrock);
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  
  .form-container button:hover {
    background-color: var(--PastelGreen);
  }
  
  .footer {
    position: relative;
    top: 2rem;
  }
  
  @media (max-width: 768px) {

    .content-container{
        position: relative;
        top: 5rem;
    }

    .header-container h1 {
      font-size: 7vw;
    }
  
    .description-container p,
    .benefits-container ul li,
    .how-it-works-container ol li {
      font-size: 1rem;
    }
  }
  </style>
  