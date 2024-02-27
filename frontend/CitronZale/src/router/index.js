import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'welcome',
      component: () => import('../views/Welcome.vue')
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
      component: () => import('../views/Schedule.vue')
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
      component: () => import('../views/Profile.vue')
    },
    {
      path: '/checkout-details',
      name: 'checkout-details',
      component: () => import('../views/CheckOutDetails.vue')
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
  ]
})

export default router