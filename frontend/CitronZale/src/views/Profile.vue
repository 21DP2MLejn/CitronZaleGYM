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
        <div class="profile-picture">
          <img :src="user.profile_image ? `/storage/${user.profile_image}` : defaultImage" alt="Profile Picture">
          <input type="file" @change="onImageChange">
        </div>
        <div class="user-info">
          <div class="user-details">
            <h2>Personal Information</h2>
            <input type="text" class="name" v-model="user.name" :readonly="!isEditing" placeholder="Name">
            <input type="text" class="lastname" v-model="user.lastname" :readonly="!isEditing" placeholder="Last Name">
            <input type="date" class="birthdate" v-model="user.birthdate" :readonly="!isEditing" placeholder="Birthdate">
            <input type="text" class="email" v-model="user.email" readonly placeholder="E-mail">
            <input type="text" class="phone-number" v-model="user.phonenumber" :readonly="!isEditing" placeholder="Phone Number">
          </div>
          <div class="user-guardian">
            <h2>Guardian Information</h2>
            <input type="text" class="guardian-name" v-model="user.guardian_name" :readonly="!isEditing" placeholder="Guardian Name">
            <input type="text" class="guardian-lastname" v-model="user.guardian_lastname" :readonly="!isEditing" placeholder="Guardian Last Name">
            <input type="text" class="guardian-email" v-model="user.guardian_email" :readonly="!isEditing" placeholder="Guardian E-mail">
          </div>
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
        profile_image: '',
      },
      isDeleteModalVisible: false,
      isEditing: false,
      defaultImage: '../assets/Images/default_profile_picture.jpg',
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
    onImageChange(e) {
      const file = e.target.files[0];
      const formData = new FormData();
      formData.append('profile_image', file);

      axios.post('http://127.0.0.1:8000/api/profile/image', formData, {
        headers: {
          'Content-Type': 'multipart/form-data',
          'Authorization': `Bearer ${localStorage.getItem('authToken')}`
        }
      })
      .then(response => {
        console.log(response.data.message);
        this.user.profile_image = response.data.data.profile_image;
      })
      .catch(error => {
        console.error('Error uploading image:', error);
      });
    },
  },
}
</script>

<style scoped>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: var(--background-color);
  color: var(--text-color);
}

.main-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 20px;
}

.navbar {
  width: 100%;
}

#container {
  background-color: var(--secondary-color);
  border-radius: var(--border-radius);
  box-shadow: var(--box-shadow);
  padding: 20px;
  max-width: 800px;
  width: 100%;
  text-align: center;
}

.profile-picture {
  width: 120px;
  height: 120px;
  background-size: cover;
  border-radius: 50%;
  border: 4px solid var(--primary-color);
  margin: 0 auto 20px auto;
}

.greetings h1 {
  font-size: 1.8rem;
  margin-bottom: 20px;
  color: var(--primary-color);
}

.user-info {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.user-details, .user-guardian {
  flex: 1;
  min-width: 300px;
  padding: 10px;
}

.user-details h2, .user-guardian h2 {
  font-size: 1.2rem;
  margin-bottom: 10px;
  color: var(--primary-color);
}

input {
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: var(--border-radius);
  font-size: 16px;
  transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus {
  border-color: var(--primary-color);
  box-shadow: 0 0 8px rgba(76, 175, 80, 0.5);
  outline: none;
}

button {
  width: calc(33% - 10px);
  padding: 10px;
  background-color: var(--primary-color);
  color: var(--secondary-color);
  border: none;
  border-radius: var(--border-radius);
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin: 5px;
}

button:hover {
  background-color: #45a049;
}

.button-container {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

button.edit-profile {
  background-color: var(--primary-color);
}

button.delete-account {
  background-color: #f44336;
}


button.edit-profile:hover,
button.delete-account:hover,
button.logout-button:hover {
  filter: brightness(0.9);
}

.modal-content {
  border-radius: var(--border-radius);
}

.modal-content button {
  border-radius: var(--border-radius);
}

/* Responsive Design */
@media (max-width: 768px) {

  .main-container{
    position: relative;
    top: 5rem;
  }

  .profile-picture {
    width: 100px;
    height: 100px;
  }

  .greetings h1 {
    font-size: 1.5rem;
  }

  .user-info {
    flex-direction: column;
    align-items: center;
  }

  button {
    width: calc(50% - 10px);
  }
}

@media (max-width: 480px) {
  .profile-picture {
    width: 80px;
    height: 80px;
  }

  .greetings h1 {
    font-size: 1.2rem;
  }

  .user-details, .user-guardian {
    min-width: 100%;
  }

  button {
    width: 100%;
    margin: 5px 0;
  }
}
</style>

