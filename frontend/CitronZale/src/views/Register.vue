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


</style>