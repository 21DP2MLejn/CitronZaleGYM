<template>
  <div class="container">
    <NavBar />
    
    <!-- Main Content Section with Image Slider -->
    <div class="content">
      <ImageSlider />
    </div>
    
    <!-- Why Choose Us Section -->
    <div class="reasons">
      <h2 class="section-title">Why Choose Us?</h2>
      <div class="reason-cards">
        <div class="reason-card" v-for="(reason, index) in reasons" :key="index">
          <img :src="reason.image" :alt="reason.title" />
          <p>{{ reason.title }}</p>
        </div>
      </div>
    </div>
    
    <!-- Gym Overview Section -->
    <div class="overview">
      <h2 class="section-title">Welcome to Our Gym</h2>
      <p class="overview-text">
        {{ gymOverview.text }}
      </p>
      <div class="overview-images">
        <img :src="gymOverview.images[0]" alt="Gym Interior" />
        <img :src="gymOverview.images[1]" alt="Gym Equipment" />
      </div>
    </div>
    
    <!-- Featured Classes Section -->
    <div class="classes">
      <h2 class="section-title">Our Featured Classes</h2>
      <div class="class-cards">
        <div class="class-card" v-for="(classItem, index) in classes" :key="index">
          <img :src="classItem.image" :alt="classItem.name" />
          <h3>{{ classItem.name }}</h3>
          <p>{{ classItem.description }}</p>
        </div>
      </div>
    </div>

    <!-- Meet the Team Section -->
    <div class="team">
      <h2 class="section-title">Meet Our Trainers</h2>
      <div class="team-members">
        <div class="team-member" v-for="(trainer, index) in trainers" :key="index">
          <img :src="trainer.image" :alt="trainer.name" />
          <h3>{{ trainer.name }}</h3>
          <p>{{ trainer.bio }}</p>
        </div>
      </div>
    </div>
    
    <!-- Testimonials Section -->
    <div class="testimonials">
      <h2 class="section-title">What Our Clients Say</h2>
      <div class="testimonial-cards">
        <div class="testimonial-card" v-for="(testimonial, index) in testimonials" :key="index">
          <p>{{ testimonial.text }} - <strong>{{ testimonial.name }}</strong></p>
        </div>
      </div>
    </div>

    <!-- Free Trial Section -->
    <div class="freetrial">
      <h2>Start Your Free Trial</h2>
      <p>{{ freeTrialText }}</p>
      <button class="btn-primary"> <router-link to="/freetrial">Start Now</router-link></button>
    </div>
    
    <!-- Footer Section -->
    <div class="footer">
      <Footer />
    </div>
  </div>
</template>

<script>
import NavBar from '../components/NavBar.vue';
import ImageSlider from '../components/ImageSlider.vue';
import Footer from '../components/Footer.vue';
import gym_picture10 from '../assets/Images/gym_picture10.jpg'
import gym_picture8 from '../assets/Images/gym_picture8.jpg'
import yoga from '../assets/Images/yoga.jpg'
import pilates from '../assets/Images/pilatesimg.jpg'
import powerlifting from '../assets/Images/power-lifting.jpg'
import gym_picture2 from '../assets/Images/gym_picture2.jpg'
import group_workout from '../assets/Images/group_workout.png'
import gym_picture3 from '../assets/Images/gym_picture3.jpg'
import trainer1 from '../assets/Images/trainer1.jpg'
import trainer2 from '../assets/Images/trainer2.jpg'
import trainer3 from '../assets/Images/trainer3.jpg'

export default {
  components: {
    NavBar,
    ImageSlider,
    Footer,
  },
  data() {
    return {
      gymOverview: {
        text: 'At CitronZale GYM, we provide a comprehensive fitness experience with a wide range of training programs, top-notch equipment, and a passionate team committed to helping you achieve your fitness goals. Whether you\'re just starting your fitness journey or you\'re a seasoned athlete, we have the resources and expertise to support your progress every step of the way.',
        images: [
          gym_picture10, // Gym Interior
          gym_picture8, // Gym Equipment
        ],
      },
      reasons: [
        { title: 'Innovative Training Programs', image: gym_picture3 },
        { title: 'Certified Personal Trainers', image: group_workout },
        { title: 'Top-of-the-line Equipment', image: gym_picture2 },
      ],
      classes: [
        { name: 'Yoga', description: 'Relax and rejuvenate with our Yoga classes. Suitable for all skill levels, these sessions focus on flexibility, strength, and mindfulness.', image: yoga },
        { name: 'Pilates', description: 'Pilates workouts focus on precise movements and breathing techniques to engage various muscle groups, promoting a balanced and strong body.', image: pilates },
        { name: 'Strength Training', description: 'Build muscle and increase strength with our targeted strength training classes. Whether you\'re lifting weights or using resistance bands, we have the tools to help you succeed.', image: powerlifting },
      ],
      trainers: [
        { name: 'John Anderson', bio: 'John is a certified personal trainer with over 10 years of experience. He specializes in weight loss, strength training, and injury rehabilitation.', image: trainer1 },
        { name: 'Jane Smith', bio: 'Jane is an expert in yoga and mindfulness, helping clients improve their flexibility, balance, and mental clarity through personalized sessions.', image: trainer2 },
        { name: 'Daniel Kim', bio: 'Daniel is a certified nutrition coach with expertise in weight management and meal planning.', image: trainer3 },
      ],
      testimonials: [
        { text: 'This gym has completely transformed my life! The trainers are so knowledgeable, and the equipment is top-notch. I feel stronger and healthier every day.', name: 'Sarah L.' },
        { text: 'I love the variety of classes available. Whether it\'s Yoga or HIIT, there\'s always something new to try. The community here is also amazing!', name: 'Tom R.' },
        { text: 'The personal training sessions have helped me achieve goals I never thought possible. The trainers are supportive and motivating. Highly recommend!', name: 'Emily K.' },
      ],
      freeTrialText: 'Experience everything we offer for free, no credit card required. Get access to all classes, equipment, and personal training for 7 days.',
    };
  },
};
</script>

<style scoped>

body {
  background-color: var(--TeaGreen);
  width: 100vw;
  height: 100vh;
  position: absolute;
  padding: 0;
  margin: 0;
  top: 0;
  left: 0;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  padding: 20px;
  box-sizing: border-box;
}


.section-title {
  font-size: 2rem;
  font-weight: 600;
  color: #333;
  margin-bottom: 1.5rem;
  text-align: center;
}


.reasons {
  padding: 2rem;
  margin: 0;
  text-align: center;

}

.reasons .reason-cards {
  display: flex;
  justify-content: space-evenly;
  gap: 2rem;
  flex-wrap: wrap;
  
}

.reasons .reason-card {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  padding: 2rem;
  width: 300px;
  text-align: center;
  transition: transform 0.3s ease;
  border: 1.5px solid var(--PastelGreen);
}

.reasons .reason-card:hover {
  transform: scale(1.05);
}

.reasons .reason-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 1rem;
}


.overview {
  padding: 3rem 1rem;
  text-align: center;
}

.overview .overview-text {
  font-size: 1.2rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 2rem;
}

.overview-images {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
  
  
}

.overview-images img {
  width: 100%;
  max-width: 400px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  border: 2px solid var(--PastelGreen);
}


.classes {
  padding: 3rem 0;
}

.class-cards {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
}

.class-card {
  width: 200px;
  background-color: white;
  padding: 1.5rem;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  border: 1.5px solid var(--PastelGreen);
}

.class-card:hover {
  transform: scale(1.05);
}

.class-card img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 1rem;
}

.class-card h3 {
  font-size: 1.5rem;
  font-weight: 500;
  color: #333;
  margin-bottom: 1rem;
}


.team {
  padding: 3rem 0;
  text-align: center;
}

.team-members {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
  
}

.team-member {
  text-align: center;
}

.team-member img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin-bottom: 1rem;
  border: 2px solid var(--PastelGreen);
}

.team-member h3 {
  font-size: 1.2rem;
  font-weight: 600;
  color: #333;
}

.team-member p {
  color: #555;
  font-size: 1rem;
  margin-top: 0.5rem;
}

.testimonials {
  padding: 3rem 0;
  background-color: #f9f9f9;
}

.testimonial-cards {
  display: flex;
  justify-content: center;
  gap: 2rem;
  flex-wrap: wrap;
}

.testimonial-card {
  background-color: white;
  padding: 1.5rem;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  width: 300px;
  text-align: center;
  transition: transform 0.3s ease;
  border: 1.5px solid var(--PastelGreen);
}

.testimonial-card:hover {
  transform: scale(1.05);
}

.testimonial-card p {
  font-size: 1rem;
  font-style: italic;
  color: #555;
  margin-bottom: 1.5rem;
}

/* Free Trial Section */
.freetrial {
  text-align: center;
  padding: 3rem;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  margin-top: 5rem;
  width: 90%;
  max-width: 600px;
  border: 1.5px solid var(--PastelGreen);
}

.freetrial h2 {
  font-size: 1.8rem;
  font-weight: 500;
  margin-bottom: 1rem;
  color: #333;
}

.freetrial p {
  font-size: 1.1rem;
  line-height: 1.5;
  color: #555;
  margin-bottom: 2rem;
}

.freetrial .btn-primary {
  background-color: var(--TeaGreen);
  color: white;
  padding: 12px 24px;
  font-size: 1rem;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.5s;
}

.freetrial .btn-primary:hover {
  background-color: var(--ShinyShamrock);
}

.footer {
  margin-top: 2rem;
  position: relative;
  left: 1.45rem;
  top: 2rem;
}
</style>
