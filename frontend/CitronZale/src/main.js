import './assets/main.css'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios';

import '@/assets/scroll-bar.css';

const token = localStorage.getItem('authToken');
if (token) {
  axios.defaults.headers.common['Authorization'] = `Bearer ${token}`;
}

axios.defaults.baseURL = 'https://api-12dmlejnieks.kvalifikacija.rvt.lv';

const app = createApp(App)

app.use(router)

app.mount('#app')
