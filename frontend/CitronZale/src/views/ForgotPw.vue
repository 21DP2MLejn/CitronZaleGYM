<template>
    <body>   
        <div class="parent">
            <div class="login-box">
                <h2>Forgot Password?</h2>
                <p>Enter the e-mail that is associated with your account and we will send you a password reset link.</p>
                <input type="text" placeholder="email@example.com">
                <div class="button-container">
                    <form action="">
                        <button class="submit" type="submit">Submit!</button>
                    </form>
                </div>
                <div class="links-container">
                    <router-link to="/login"><button class="return">Return</button></router-link>    
                </div>
                <p class="forgot-password">Forgot your password?</p>
            </div>
            <div class="image-container">
                <div class="image"></div>
            </div>
        </div>
    </body>
    </template>
    

<script>

</script>

<style scoped>
body{
    background-color: var(--TeaGreen);
    height:  100vh;
    width:  100vw;
    position: absolute;
    top:  0;
    left:  0;
    margin:  0;
    padding:  0;
    overflow: hidden;
}
.parent{
    display: flex;
    align-content: center;
    justify-content: center;
}
.login-box {
  width:  320px;
  padding:  20px;
  background-color: white;
  border-radius:  10px;
  box-shadow:  0  0  10px rgba(0,  0,  0,  0.1);
  margin:  50px auto;
  max-height:  400px;
}

.login-box h2 {
  text-align: center;
  color: var(--TeaGreen);
  margin-bottom:  20px;
}

.login-box input {
  width:  94%;
  padding:  10px;
  margin-bottom:  10px;
  border:  1px solid var(--TeaGreen);
  border-radius:  5px;
}

.login-box button {
  width:  100%;
  padding:  10px;
  background-color: var(--TeaGreen);
  color: white;
  border: none;
  border-radius:  5px;
  cursor: pointer;
  transition: background-color  0.3s ease;
}

.login-box button:hover {
  background-color: var(--ShinyShamrock);
}

.links-container {
  text-align: center;
}

.links-container a {
  color: var(--TeaGreen);
  text-decoration: none;
}

.links-container a:hover {
  color: var(--ShinyShamrock);
}

.forgot-password {
  font-size:  0.8rem;
  color: var(--TeaGreen);
}

.image-container{
    background-image: url(../assets/Images/confused.png);
    position: absolute;
    height: 25rem ;
    width: 35rem;
    background-repeat: no-repeat;
    top: 60%;
}

@media (max-width:  768px) {
  .login-box{
    position: relative;
    top:  12rem;
  }

  .image-container{
    top: 70%;
  }
}
</style>
