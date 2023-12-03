<template>
    <div class="container">
        <div class="free-trial">
            <h1>Not ready to start? Get 3 day free trial.</h1>
            <p>By submitting this free training form, you agree to receive marketing information. You can withdraw your consent at any time by contacting help@citronzale.com .</p>
            <input type="text" name="" id="" placeholder="Your email">
            <button type="submit">GET FREE TRIAL</button>
        </div>
    </div>
</template>

<script>
export default{
    name: 'freetrial',
}
</script>

<style scoped>

.container{
    width: 100vw;
    height: auto;
    background-color: var(--ShinyShamrock);
    margin-bottom: 2rem;
    display: flex;
    justify-content: center;
    align-content: center;
    padding: 1rem;
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

  button {
  --b: 3px;   
  --s: .15em;
  
  padding: calc(.05em + var(--s)) calc(.3em + var(--s));
  color: var(--black);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--black) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .2em;
}
button:hover,
button:focus-visible{
  --_p: 0px;
  outline-color: var(--black);
  outline-offset: .05em;
}
button:active {
  background: var(--black);
  color: var(--TeaGreen);
}

button{
    font-size: 1.5rem;
    cursor: pointer;
    border: none;
    margin: .1em;
    transition: 0.5s;
    position: relative;
    left: 1rem;
    transition: 0.5s;
}

</style>