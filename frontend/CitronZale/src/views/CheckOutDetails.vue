<template>
<main>
    <div class="top-section">
        <TopSection/>
    </div>
    <div class="header">
        <h1>ADD YOUR DETAILS</h1>
    </div>
    <div class="center">
        <div class="details-container">
            <div class="completion-bar"></div>
            <div class="details-content">
                <div class="home-club">
                    <br>
                    <p>Your home club:</p>
                </div>
                <div class="subscription-type">
                    <br>
                    <p>Your subscription type:</p>
                </div>
            </div>
            <div class="personal-details">
                <h3>Please, fill in your personal details:</h3>
                <label for="email"> <span class="required">*</span>Email address</label>
                <input id="email" type="text" placeholder="email@example.com">
            </div>
            <div class="button-container">
                <button>BACK</button>
                <button>NEXT</button>
            </div>
        </div>
    </div>
</main>
</template>

<script>
import TopSection from '../components/TopSection.vue';

export default{
    components: {
        TopSection
    }
}
</script>

<style scoped>

.header{
    position: relative;
    left: 50rem;
    height: 3rem;
}

.center{
    display: flex;
    align-content: center;
    justify-content: center;
    position: relative;
    top: 5rem;
}
.top-section{
    margin: 0;
    position: relative;
    left: -0.5rem;
    top: -1rem;
}

.details-container{
    width: 40rem;
    height: 40rem;
    position: relative;
}


.required{
    color: red;
}

.details-content{
    width: 100%;
    height: 10rem;
    position: relative;
    left: 1rem;
}
.personal-details{
    width: 100%;
    height: 12rem;
    position: relative;
    left: 0;
    display: inline-block;
    top: 5rem;
    left: 2.5rem;
}

.personal-details input{
    width: 80%;
    position: relative;
    top: 1rem;
}
.button-container{
    width: 15rem;
    height: 3rem;
    position: relative;
    top: 10rem;
    left: 25rem;
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
    font-size: 1.4rem;
    cursor: pointer;
    border: none;
    margin: .1em;
    margin-left: 1.5rem;
    transition: 0.5s;
    position: relative;
}
</style>