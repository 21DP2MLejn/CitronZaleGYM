<template>
    <main>
        <div class="navbar">
            <NavBar/>
        </div>
        <div class="top-section">
            <div class="text-container">
                <h1>Group training schedule</h1>
                <p>Welcome to our dynamic and diverse training community! At CitronZale, we believe in the power of group training to elevate your fitness experience. Our meticulously crafted schedule of training groups offers a variety of sessions tailored to meet your unique goals and preferences.</p>
            </div>
            <div class="section-divider"></div>
            <div class="image-section-container">
                <div class="square-shape"></div>
                <div class="rectangle-shape"></div>
                <div class="quadrilateral-shape"></div>
            </div>
        </div>
        <div class="flex-container">
            <div class="schedule-rules">
                <h2>Important!</h2>
                <ul>
                    <p>Registration to group trainings is mandatory before attending one, here are rules that should be followed.</p>
                    <li>You can register to a group training through any device, that CitronZale is available</li>
                    <li>You can't have more than 3 appointment for training sessions at once</li>
                    <li>If you do not attend scheduled trainings more than 2 times a week, then your account will be temporarily prohibeted from scheduling a new group training session </li>
                    <li>A group training session will only take place if there is atleast 5 registered members attending it</li>
                    <li>If are not attending a class make sure you unsubscibe from it.</li>
                </ul>
            </div>
        </div>
        
        <div class="table-container">
            <table>
           <tr>
               <th></th>
               <th>Monday</th>
               <th>Tuesday</th>
               <th>Wednesday</th>
               <th>Thursday</th>
               <th>Friday</th>
           </tr>
           <tr v-for="(session, time) in schedule" :key="time">
               <td>{{ time }}</td>
               <td v-for="(activity, day) in session" :key="day">
                   <div v-if="activity">
                       <button @click="reserveSession(activity.id)">{{ activity.name }}</button>
                       <div>{{ activity.reserved }}/20</div>
                   </div>
               </td>
           </tr>
       </table>
        <div v-if="selectedSession" class="selected-session">
            <p>You have selected: {{ selectedSession.name }}</p>
        </div>
       <div class="button-container">
            <button class="reserve" @click="makeReservation" :disabled="!selectedSession">Reserve</button>
            <button class="cancelreservation" @click="cancelReservation" :disabled="!selectedSession">Cancel Reservation</button>
       </div>
        </div>
        <div class="footer">
          <Footer />
        </div>
    </main>
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
                selectedSession: null,
                schedule: {},
            };
        },
        methods: {
            fetchSchedule() {
                axios.get('/api/schedule').then(response => {
                    this.schedule = response.data;
                });
            },
            reserveSession(sessionId) {
                this.selectedSession = this.schedule.find(session => session.id === sessionId);
            },
            makeReservation() {
                axios.post('/api/reserve', { session_id: this.selectedSession.id })
                    .then(response => {
                        alert(response.data.message);
                        this.fetchSchedule();
                    })
                    .catch(error => {
                        alert(error.response.data.error);
                    });
            },
            cancelReservation() {
                axios.delete(`/api/cancel-reservation/${this.selectedSession.id}`)
                    .then(response => {
                        alert(response.data.message);
                        this.fetchSchedule();
                    })
                    .catch(error => {
                        alert(error.response.data.error);
                    });
            },
        },
        created() {
            this.fetchSchedule();
        },
    };
    </script>
    
    <style scoped>
    /* (existing styles remain unchanged) */
    </style>
    