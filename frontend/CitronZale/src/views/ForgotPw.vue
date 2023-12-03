<template>
<body>  
    <div class="parent">
        <div class="container">
            <h1>Forgot Password?</h1>
            <p>Enter the e-mail that is associated with your account and we will send you a password reset link.</p>
            <input type="text" placeholder="email@example.com">
            <div class="button-container">
                <button class="submit" type="submit">Submit!</button>
                <router-link to="/login"><button class="return">Return</button></router-link>    
            </div>

        </div>
        <div class="image-container">
            <img src="../assets/images/confused.png" alt="???@!">
        </div>
    </div>
</body>
</template>

<script>
</script>

<style scoped>

body{
    background-color: var(--TeaGreen);
    height: 100vh;
    width: 100vw;
    position: absolute;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
}
.parent{
    display: flex;
    align-content: center;
    justify-content: center;

}
.container{
    width: 45vw;
    height: 48vh;
    background-color: var(--ShinyShamrock);
    border-radius: 2rem;
    padding: 1rem;
    position: relative;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
    top: 13.5rem;
    z-index: 1000;
    border: 0.2rem solid var(--PastelGreen);
}

.button-container{
    display: flex;
    flex-direction: row;
}

h1{
    width: 20vw;
    position: relative;
    top: -3rem;
}

p{
    position: relative;
    top: -3rem;
}

button{
    width: 6rem;
    height: 1.8rem;
    border-radius: 1rem;
    border: 0.15rem solid var(--PastelGreen);
    margin-bottom: 1rem;
    transition: 0.3s ease-in-out;
    position: relative;
    top: -3rem;
    margin-right: 1rem;
  }

  button:hover{
    transform: scale(1.1);
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

  img{
    position: absolute;
    top: 25rem;
    left: -15rem;
    width: 45vw;
}


</style>