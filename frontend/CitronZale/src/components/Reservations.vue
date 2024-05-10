<template>
    <main>
        <div>
        <form @submit.prevent="reserveTraining">
            <select v-model="selectedSession">
            <option disabled value="">Please select a session</option>
            <option v-for="(session, index) in sessions" :key="index" :value="session">{{ session }}</option>
            </select>
            <button type="submit">Reserve</button>
        </form>
        </div>
    </main>
</template>
  
  <script>
  export default {
    data() {
      return {
        selectedSession: '',
        sessions: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']
      };
    },
    methods: {
      reserveTraining() {
        // Send reservation data to the backend
        axios.post('/api/reserve', { session: this.selectedSession })
         .then(response => {
            console.log('Reservation successful');
          })
         .catch(error => {
            console.error('Error reserving training:', error);
          });
      }
    }
  };
  </script>