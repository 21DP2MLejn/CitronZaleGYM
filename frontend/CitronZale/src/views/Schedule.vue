<template>
    <main>
      <div class="navbar">
        <NavBar />
      </div>
      <div class="top-section">
        <div class="text-container">
          <h1>Group training schedule</h1>
          <p>
            Welcome to our dynamic and diverse training community! At CitronZale,
            we believe in the power of group training to elevate your fitness
            experience. Our meticulously crafted schedule of training groups
            offers a variety of sessions tailored to meet your unique goals and
            preferences.
          </p>
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
            <p>
              Registration to group trainings is mandatory before attending one,
              here are rules that should be followed.
            </p>
            <li>
              You can register to a group training through any device, that
              CitronZale is available
            </li>
            <li>
              You can't have more than 3 appointment for training sessions at once
            </li>
            <li>
              If you do not attend scheduled trainings more than 2 times a week,
              then your account will be temporarily prohibited from scheduling a
              new group training session
            </li>
            <li>
              A group training session will only take place if there are at least
              5 registered members attending it
            </li>
            <li>If you are not attending a class make sure you unsubscribe from it.</li>
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
          <tr>
            <td>12:00</td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 1, name: 'INDOOR CYCLING' })">
                Reserve
              </button>
              INDOOR CYCLING
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 2, name: 'STRETCH & BALANCE' })">
                Reserve
              </button>
              STRETCH & BALANCE
            </td>
            <td>
              <button @click="reserveSession({ id: 3, name: 'CIRCUIT TRAINING' })">
                Reserve
              </button>
              CIRCUIT TRAINING
            </td>
          </tr>
          <tr>
            <td>13:00</td>
            <td>
              <button @click="reserveSession({ id: 4, name: 'POWER LIFTING' })">
                Reserve
              </button>
              POWER LIFTING
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 5, name: 'ZUMBA' })">Reserve</button>
              ZUMBA
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 6, name: 'PILATES' })">Reserve</button>
              PILATES
            </td>
          </tr>
          <tr>
            <td>14:00</td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 7, name: 'YOGA' })">Reserve</button>
              YOGA
            </td>
            <td>
              <button @click="reserveSession({ id: 8, name: 'POWER LIFTING' })">
                Reserve
              </button>
              POWER LIFTING
            </td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>15:00</td>
            <td>
              <button @click="reserveSession({ id: 9, name: 'PILATES' })">Reserve</button>
              PILATES
            </td>
            <td></td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 10, name: 'KICKBOXING' })">
                Reserve
              </button>
              KICKBOXING
            </td>
            <td></td>
          </tr>
          <tr>
            <td>16:00</td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 11, name: 'INDOOR CYCLING' })">
                Reserve
              </button>
              INDOOR CYCLING
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 12, name: 'STRETCH & BALANCE' })">
                Reserve
              </button>
              STRETCH & BALANCE
            </td>
            <td>
              <button @click="reserveSession({ id: 13, name: 'CIRCUIT TRAINING' })">
                Reserve
              </button>
              CIRCUIT TRAINING
            </td>
          </tr>
          <tr>
            <td>17:00</td>
            <td>
              <button @click="reserveSession({ id: 14, name: 'POWER LIFTING' })">
                Reserve
              </button>
              POWER LIFTING
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 15, name: 'ZUMBA' })">Reserve</button>
              ZUMBA
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 16, name: 'PILATES' })">Reserve</button>
              PILATES
            </td>
          </tr>
          <tr>
            <td>18:00</td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 17, name: 'YOGA' })">Reserve</button>
              YOGA
            </td>
            <td>
              <button @click="reserveSession({ id: 18, name: 'POWER LIFTING' })">
                Reserve
              </button>
              POWER LIFTING
            </td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>19:00</td>
            <td>
              <button @click="reserveSession({ id: 19, name: 'CORE TRAINING' })">
                Reserve
              </button>
              CORE TRAINING
            </td>
            <td>
              <button @click="reserveSession({ id: 20, name: 'FULL BODY CIRCLES' })">
                Reserve
              </button>
              FULL BODY CIRCLES
            </td>
            <td></td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 21, name: 'YOGA' })">Reserve</button>
              YOGA
            </td>
          </tr>
          <tr>
            <td>20:00</td>
            <td>
              <button @click="reserveSession({ id: 22, name: 'PILATES' })">Reserve</button>
              PILATES
            </td>
            <td></td>
            <td>
              <button @click="reserveSession({ id: 23, name: 'KICKBOXING' })">
                Reserve
              </button>
              KICKBOXING
            </td>
            <td></td>
            <td></td>
          </tr>
        </table>
        <div v-if="selectedSession" class="selected-session">
          <p>You have selected: {{ selectedSession.name }}</p>
        </div>
        <div class="button-container">
          <button class="reserve" @click="makeReservation">Reserve</button>
          <button class="cancelreservation" @click="cancelReservation">
            Cancel Reservation
          </button>
        </div>
      </div>
      <div class="footer">
        <Footer />
      </div>
    </main>
  </template>
  
  <script>
  import axios from "axios";
  import Footer from "../components/Footer.vue";
  import NavBar from "../components/NavBar.vue";
  
  export default {
    components: { 
      NavBar,
      Footer
     },
    data() {
      return {
        user: null,
        schedule: {},
        reservations: [],
        selectedSession: null
      };
    },
    mounted() {
      this.getUser();
      this.getSchedule();
    },
    methods: {
      async getUser() {
        try {
          const response = await axios.get("/api/user");
          this.user = response.data;
          this.getReservations();
        } catch (error) {
          console.error(error);
        }
      },
      async getSchedule() {
        try {
          const response = await axios.get("/api/schedule");
          this.schedule = response.data;
        } catch (error) {
          console.error(error);
        }
      },
      async getReservations() {
        try {
          const response = await axios.get("/api/reservations");
          this.reservations = response.data;
        } catch (error) {
          console.error(error);
        }
      },
      async reserveSession(session) {
        try {
          await axios.post("/api/reserve", { session_id: session.id });
          alert(`You have successfully reserved a spot in the ${session.name} session.`);
          this.getReservations();
          this.getSchedule();
        } catch (error) {
          alert(error.response.data.error);
        }
      },
      async cancelReservation(sessionId) {
        try {
          await axios.delete(`/api/cancel-reservation/${sessionId}`);
          alert("Your reservation has been successfully cancelled.");
          this.getReservations();
          this.getSchedule();
        } catch (error) {
          alert(error.response.data.error);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .top-section {
    width: 101vw;
    height: 40rem;
    position: relative;
    background-color: var(--TeaGreen);
    display: flex;
    justify-content: center;
    flex-flow: column;
    left: -0.5rem;
    padding: 1rem;
    top: 3rem;
  }
  
  .text-container {
    border: 2px solid var(--PastelGreen);
    width: 30rem;
    position: relative;
    left: 3rem;
  }
  
  .top-section p {
    width: 25rem;
  }
  
  .top-section h1 {
    font-weight: var(--font-bold);
    color: var(--ShinyShamrock);
  }
  
  .top-section p,
  h1 {
    position: relative;
    left: 2rem;
  }
  
  .schedule-rules {
    position: relative;
    top: 5rem;
    width: 90rem;
    padding: 1rem;
  }
  
  .flex-container {
    display: flex;
    justify-content: center;
    align-content: center;
  }
  
  .section-divider {
    width: 3rem;
    height: 42rem;
    background-color: var(--ShinyShamrock);
    position: absolute;
    left: 50rem;
    transform: skew(-30deg);
  }
  
  @keyframes moverectangle {
    0% {
      background-position: 0 -1%;
    }
    100% {
      background-position: 0 100%;
    }
  }
  @keyframes movesquare {
    0% {
      background-position: 10% 0;
    }
    100% {
      background-position: 50% 30%;
    }
  }
  @keyframes movequadrilateral {
    0% {
      background-position: 0 0;
    }
    100% {
      background-position: 80% 10%;
    }
  }
  
  .square-shape,
  .rectangle-shape,
  .quadrilateral-shape {
    background-size: 100% 100%;
    background-position: 0 0;
  }
  
  .square-shape {
    width: 22rem;
    height: 22rem;
    background-color: var(--Black);
    position: absolute;
    left: 85.5rem;
    top: 3rem;
    background-position: -200% 10%;
    background-size: 150% 100%;
    animation: movesquare 6s linear infinite;
    background-image: url('../assets/Images/gym_picture7.jpg');
  }
  
  .rectangle-shape {
    width: 42.5rem;
    height: 15rem;
    background-color: red;
    position: absolute;
    left: 65rem;
    top: 25.5rem;
    background-position: 0% -100%;
    background-size: 150% 200%;
    animation: moverectangle 6s linear infinite;
    background-image: url('../assets/Images/gym_picture4.jpg');
  }
  
  .quadrilateral-shape {
    width: 20rem;
    height: 22rem;
    position: absolute;
    left: 65rem;
    top: 3rem;
    background-position: 0 0;
    background-size: 150% 100%;
    animation: movequadrilateral 6s linear infinite;
    background-image: url('../assets/Images/gym_picture1.jpg');
  }
  
  .footer {
    position: relative;
    top: 25rem;
  }
  
  .table-container {
    position: relative;
    top: 10rem;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }
  
  th,
  td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
    font-size: 18px;
  }
  
  th {
    background-color: var(--ShinyShamrock);
    color: var(--Black);
    font-weight: var(--font-bold);
    height: 4rem;
  }
  
  input[type='text'] {
    width: 100%;
    box-sizing: border-box;
  }
  
  .button-container {
    display: flex;
    justify-content: center;
  }
  
  .button-container button {
    background-color: var(--ShinyShamrock);
    color: #fff;
    border: none;
    padding: 1rem 3rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    position: relative;
    top: 2rem;
  }
  
  .button-container button:hover {
    background-color: var(--PastelGreen);
  }
  
  .button-container .cancelreservation {
    margin-left: 5px;
  }
  </style>
  