<template>
<body>
  <div>
    <LoginBox
      :title="'Register Page'"
      :loginButtonText="'Sign Up'"
      :loginLinkText="'Already have an account? Login.'"
      :isRegister="true"
    />
  </div>
  <div class="background">
    <div class="image-container">
        <img src="../assets/Images/gym_picture5.jpg" alt="Login-Background">
    </div>
  </div>
</body>
</template>

<script>
import LoginBox from '../components/LoginRegisterbox.vue';

export default {
  components: {
    LoginBox,
  },
}

</script>

<style scoped>

body{
  background-image: url(../assets/Images/gym_picture6.jpg);
  background-repeat: no-repeat;
}

</style>