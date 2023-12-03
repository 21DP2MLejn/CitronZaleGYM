import { createRouter, createWebHistory } from 'vue-router'
import WelcomePage from '../views/Welcome.vue'
import LoginPage from '../views/Login.vue'
import RegisterPage from '../views/Register.vue'
import ForgotPassword from '../views/ForgotPw.vue'
import Prices from '../views/Prices.vue'
import AboutUs from '../views/AboutUs.vue'
import Schedule from '../views/Schedule.vue'
import Trainings from '../views/Trainings.vue'
import PersonalTrainings from '../views/PersonalTrainings.vue'
import GroupTrainings from '../views/GroupTrainings.vue'
import Trainers from '../views/Trainers.vue'
import Clubs from '../views/Clubs.vue'
import Profile from '../views/Profile.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'welcome',
      component: WelcomePage
    },
    {
      path: '/login',
      name: 'login',
      component: LoginPage
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterPage
    },
    {
      path: '/forgot-password',
      name: 'forgot-password',
      component: ForgotPassword
    },
    {
      path: '/prices',
      name: 'prices',
      component: Prices
    },
    {
      path: '/about-us',
      name: 'aboutus',
      component: AboutUs
    },
    {
      path: '/schedule',
      name: 'schedule',
      component: Schedule
    },
    {
      path: '/trainings',
      name: 'trainings',
      component: Trainings
    },
    {
      path: '/trainers',
      name: 'trainers',
      component: Trainers

    },
    {
      path: '/personal-trainings',
      name: 'personal-trainings',
      component: PersonalTrainings
    },
    {
      path: '/group-trainings',
      name: 'group-trainings',
      component: GroupTrainings
    },
    {
      path: '/clubs',
      name: 'clubs',
      component: Clubs
    },
    {
      path: '/profile',
      name: 'profile',
      component: Profile
    },
  ]
})

export default router