<template>
  <main>
    <div class="navbar">
      <NavBar />
    </div>
    <div class="main-container">
      <div id="container">
        <div class="greetings">
          <h1>Hello, {{ user.name }} {{ user.lastname }}</h1>
        </div>
        <div class="profile-picture"></div>
        <div class="user-details">
          <input type="text" class="name" v-model="user.name" :readonly="!isEditing" placeholder="Name">
          <input type="text" class="lastname" v-model="user.lastname" :readonly="!isEditing" placeholder="Last Name">
          <input type="date" class="birthdate" v-model="user.birthdate" :readonly="!isEditing" placeholder="Birthdate">
        </div>
        <div class="user-contact">
          <input type="text" class="email" v-model="user.email" readonly placeholder="E-mail">
          <input type="text" class="phone-number" v-model="user.phonenumber" :readonly="!isEditing" placeholder="Phone Number">
        </div>
        <div class="user-guardian">
          <input type="text" class="guardian-name" v-model="user.guardian_name" :readonly="!isEditing" placeholder="Guardian Name">
          <input type="text" class="guardian-lastname" v-model="user.guardian_lastname" :readonly="!isEditing" placeholder="Guardian Last Name">
          <input type="text" class="guardian-email" v-model="user.guardian_email" :readonly="!isEditing" placeholder="Guardian E-mail">
        </div>
        <div class="button-container">
          <button class="edit-profile" @click="toggleEditProfile">{{ isEditing ? 'Save changes' : 'Edit profile' }}</button>
          <button class="delete-account" @click="showDeleteModal">Delete account</button>
          <button class="logout-button" @click="logout">Log Out</button>
        </div>
      </div>
    </div>
    <Modal 
      :visible="isDeleteModalVisible" 
      title="Delete Account" 
      confirmButtonText="Delete" 
      @close="isDeleteModalVisible = false" 
      @confirm="deleteAccount"
    >
      <p>Are you sure you want to delete your account? This action cannot be undone.</p>
    </Modal>
  </main>
</template>


<script>
import NavBar from '../components/NavBar.vue';
import Modal from '../components/Modal.vue';
import axios from 'axios';

export default {
  components: {
    NavBar,
    Modal,
  },
  data() {
    return {
      user: {
        name: '',
        lastname: '',
        email: '',
        phonenumber: '',
        birthdate: '',
        guardian_name: '',
        guardian_lastname: '',
        guardian_email: '',
      },
      isDeleteModalVisible: false,
      isEditing: false,
    };
  },
  async created() {
    await this.fetchUserProfile();
  },
  methods: {
    async fetchUserProfile() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/profile');
        this.user = response.data.data;
      } catch (error) {
        console.error('Error fetching profile:', error);
      }
    },
    showDeleteModal() {
      this.isDeleteModalVisible = true;
    },
    async deleteAccount() {
      try {
        const response = await axios.delete('http://127.0.0.1:8000/api/delete-account');
        console.log(response.data.message);
        localStorage.removeItem('authToken');
        this.$router.push('/login');
      } catch (error) {
        console.error('There was an error!', error);
      } finally {
        this.isDeleteModalVisible = false;
      }
    },
    toggleEditProfile() {
      if (this.isEditing) {
        this.saveProfile();
      } else {
        this.isEditing = true;
      }
    },
    async saveProfile() {
      try {
        const token = localStorage.getItem('authToken');
        const response = await axios.put('http://127.0.0.1:8000/api/profile', this.user, {
          headers: {
            'Authorization': `Bearer ${token}`
          }
        });
        console.log(response.data.message);
        alert('Profile updated successfully');
      } catch (error) {
        console.error('Error updating profile:', error);
        alert('Error updating profile');
      } finally {
        this.isEditing = false;
      }
    },
    async logout() {
      try {
        localStorage.removeItem('authToken');
        const response = await axios.post('http://127.0.0.1:8000/api/logout');
        console.log(response.data.message);
        this.$router.push('/login');
        this.isLoggedin = false;
      } catch (error) {
        console.error('Error logging out:', error);
        alert('Problem with logging out');
      }
    },
  }
}
</script>



<style scoped>
.main-container{
  width: 100%;
  height: 100%;
  background-color: var(--TeaGreen);
}

.input-container {
  display: flex;
  flex-direction: column;
  width: 300px;
  margin: 20px;
}

input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus {
  border-color: var(--ShinyShamrock);
  box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
  outline: none; 
}
.navbar{
    position: relative;
    margin: 1;
    padding: 1;
    left: -0.5rem;
    top: -0.5rem;
}

#container{
  position: absolute;
  top: 45%;
  left: 45%;
  transform: translate(-50%, -50%);
  padding: 10px;
}

.profile-picture{
   width: 20rem;
   height: 20rem;
   background-image: url(../assets/Images/gym_picture5.jpg);
   background-repeat: no-repeat;
   background-size: cover;
   border-radius: 10rem;
   overflow: hidden;
   display: flex;
   justify-content: center;
   align-content: center;
   border: 0.18rem solid var(--PastelGreen);
   position: relative;
   left: -10rem;
}

button {
  width: 8rem;
  padding: 10px;
  background-color: var(--TeaGreen);
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-left: 5px;
}

button:hover {
  background-color: var(--ShinyShamrock);
}

.user-details{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -10rem;
}

.user-contact{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -9rem;
}

.user-guardian{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  position: relative;
  left: 16rem;
  top: -8rem;
}

h1{
  font-size: 3rem;
}

.greetings{
  position: relative;
  left: 16rem;
  top: 5rem;
}

.button-container{
  width: 100%;
  display: flex;
  align-content: center;
  justify-content: center;
}
</style>
