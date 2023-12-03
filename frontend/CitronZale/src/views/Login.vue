<template>
  <div>
    <LoginBox
      :title="'Login Page'"
      :loginButtonText="'Log In'"
      :registerLinkText="'Don\'t have an account? Register.'"
      :isRegister="false" 
    />
  </div>
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