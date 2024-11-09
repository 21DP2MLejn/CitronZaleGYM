import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'welcome',
      component: () => import('../views/Welcome.vue'),
      
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/Login.vue')
    },
    {
      path: '/register',
      name: 'register',
      component: () => import('../views/Register.vue')
    },
    {
      path: '/forgot-password',
      name: 'forgot-password',
      component: () => import('../views/ForgotPw.vue')
    },
    {
      path: '/prices',
      name: 'prices',
      component: () => import('../views/Prices.vue')
    },
    {
      path: '/about-us',
      name: 'aboutus',
      component: () => import('../views/AboutUs.vue')
    },
    {
      path: '/schedule',
      name: 'schedule',
      component: () => import('../views/Schedule.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/trainings',
      name: 'trainings',
      component: () => import('../views/Trainings.vue')
    },
    {
      path: '/trainers',
      name: 'trainers',
      component: () => import('../views/Trainers.vue')

    },
    {
      path: '/personal-trainings',
      name: 'personal-trainings',
      component: () => import('../views/PersonalTrainings.vue')
    },
    {
      path: '/group-trainings',
      name: 'group-trainings',
      component: () => import('../views/GroupTrainings.vue')
    },
    {
      path: '/clubs',
      name: 'clubs',
      component: () => import('../views/Clubs.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      component: () => import('../views/Profile.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/checkout-details',
      name: 'checkout-details',
      component: () => import('../views/CheckOutDetails.vue'),
      meta: { requiresAuth: true }
    },
    {
      path: '/bolderaja-club',
      name: 'bolderaja-club',
      component: () => import('../views/BolderajaClub.vue')
    },
    {
      path: '/teika-club',
      name: 'teika-club',
      component: () => import('../views/TeikaClub.vue')
    },
    {
      path: '/ogre-club',
      name: 'ogre-club',
      component: () => import('../views/OgreClub.vue')
    },
    {
      path: '/circuit-training',
      name: 'circuit-training',
      component: () => import('../views/Group-trainings/Circuit-training.vue')
    },
    {
      path: '/core-training',
      name: 'core-training',
      component: () => import ('../views/Group-trainings/Core-training.vue')
    },
    {
      path: '/indoor-cycling',
      name: 'indoor-cycling',
      component: () => import('../views/Group-trainings/Indoor-cycling.vue')
    },
    {
      path: '/kick-boxing',
      name: 'kick-boxing',
      component: () => import('../views/Group-trainings/Kick-boxing.vue')
    },
    {
      path: '/pilates',
      name: 'pilates',
      component: () => import('../views/Group-trainings/Pilates.vue')
    },
    {
      path: '/power-lifting',
      name: 'power-lifting',
      component: () => import('../views/Group-trainings/Power-lifting.vue')
    },
    {
      path: '/stretch-and-balance',
      name: 'stretch-and-balance',
      component: () => import('../views/Group-trainings/Stretch-balance.vue')
    },
    {
      path: '/yoga',
      name: 'yoga',
      component: () => import('../views/Group-trainings/Yoga.vue')
    },
    {
      path: '/zumba',
      name: 'zumba',
      component: () => import('../views/Group-trainings/Zumba.vue')
    },
    {
      path: '/freetrial',
      name: 'freetrial',
      component: () => import ('../views/Free3DayTrial.vue')
    },
    {
      path: '/privacy-policy',
      name: 'privacy-policy',
      component: () => import ('../views/PrivacyPolicy.vue')
    },
  ]
})

router.beforeEach((to, from, next) => {
  // Fetch auth token from localStorage
  const isAuthenticated = !!localStorage.getItem('authToken'); 

  console.log('Navigation to:', to.name); // Check which route is being accessed
  console.log('Authenticated:', isAuthenticated); // Verify if authentication is detected
  
  if (to.meta.requiresAuth && !isAuthenticated) {
    alert('Access denied. Redirecting to welcome page.');
    next({ name: 'welcome' }); // Redirect to welcome if not authenticated
  } else {
    next(); // Allow access to route
  }
});

export default router
