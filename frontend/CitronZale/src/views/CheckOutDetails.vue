<template>
<main>
    <div class="top-section">
        <TopSection/>
    </div>
    <div class="center">
          <div class="details-content">
        <div v-if="step ===  1" class="personal-details">
            <form action="">
                <label for="email"> <span class="required">*</span>Email address</label>
                    <br>
                <input id="email" v-model="email" type="email" placeholder="email@example.com" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <br>
                <label for="firstname"> <span class="required">*</span> First Name</label>
                    <br>
                <input  id="firstname" type="text" v-model="firstname" placeholder="First Name" required>
                    <br>
                <label for="lastname"> <span class="required">*</span>Last Name</label>
                    <br>
                <input id="lastname" type="text" v-model="lastname" placeholder="Last Name" required>
                    <br>
                <label for="gender"><span class="required">*</span>Gender</label>
                    <br>
                <select name="gender" id="gender" v-model="gender" required>
                    <option value="">Select your gender</option>
                    <option value="Man">Male</option>
                    <option value="Woman">Female</option>
                </select>
                    <br>
                <label for="birthdate"><span class="required">*</span> Birth Date</label>
                    <br>
                <input id="birthdate" type="date" v-model="birthdate" placeholder="Birth Date" required>
                    <br>
                <label for="phonenumber"><span class="required">*</span>Phone Number</label>
                    <br>
                <input id="phonenumber" type="tel" v-model="phonenumber" placeholder="XXXXXXXXX" required>
                    <br>
                <label for="activationdate"><span class="required">*</span>Activation date of membership</label>
                    <br>
                <input id="activationdate" type="date" v-model="activationdate" placeholder="" required>
            </form>

        </div>
        <div v-if="step ===  2" class="gym-details">
            <form action="">
                <label for="selectClubs"> <span class="required">*</span>Your home club:</label>
                    <br>
                <select name="clubs" id="selectClubs" v-model="homeClub" required>
                    <option value="">Select your home club</option>
                    <option value="Bolderaja">Bolderaja</option>
                    <option value="Ogre">Ogre</option>
                    <option value="Teika">Teika</option>
                </select>
                    <br>
                    <br>
                <label for="subscriptiontype"><span class="required">*</span> Select your subscription type</label>
                    <br>
                <select name="subscription" id="subscriptiontype" v-model="subscriptionType" required>
                    <option value="">Select your subscription type</option>
                    <option value="Regular">Regular</option>
                    <option value="Flex">Flex</option>
                    <option value="Super">Super</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
                    <br>
                    <br>
                <label for="addons"><span class="required">*</span> Select your addons:</label>
                <div class="checkbox" id="addons" >
                    <input type="checkbox" id="water" name="water" value="Water" required v-model="water">
                    <label for="water">Additional water refill</label>
                    <br>
                    <input type="checkbox" id="sauna" name="sauna" value="Sauna" required v-model="sauna">
                    <label for="sauna">Sauna usage</label>
                    <br>
                    <input type="checkbox" id="massage" name="massage" value="Massage" required v-model="massage">
                    <label for="massage">Electrical massage machine</label>
                    <br>
                    <input type="checkbox" id="none" name="none" value="None" required v-model="none">
                    <label for="none">None</label>
                    <br>
                </div>
            </form>
        </div>
        <div v-if="step ===  3">
            <div class="payment-method">
                <label for="">
                    <input type="radio" value="creditCard" v-model="paymentMethod">
                    Credit Card
                </label>
                <br>
                <label for="">
                    <input type="radio" value="paypal" v-model="paymentMethod">
                    PayPal
                </label>
                <div v-if="paymentMethod === 'creditCard'" class="credit-card-details">
                    <label for="cardholdername"><span class="required">*</span> Card Holder Name</label>
                    <input type="text" v-model="CardHolderName" placeholder="Name" id="cardholdername">
                    <label for="cardholderlastname"><span class="required">*</span> Card Holder Last Name</label>
                    <input type="text" id="cardholderlastname" v-model="cardholderlastname" placeholder="Last Name">
                    <label for="cardNumber"><span class="required">*</span> Card Number</label>
                    <input id="cardNumber" type="text" placeholder="Card Number" v-model="cardNumber" maxlength="19">
                    <label for="securitycode"><span class="required">*</span> CVV</label>
                    <input type="text" name="cvv" id="securitycode" v-model="cvv" placeholder="CVV" maxlength="3">
                    <label for="creditcarddate"><span class="required">*</span> Expiration Date</label>
                    <input type="month" id="creditcarddate" v-model="creditcarddate">
                    <br>
                    <button>Proceed</button>
                </div>
                <div v-if="paymentMethod === 'paypal'" class="paypal-method">
                    <h3>Total: {{ price }}</h3>
                    <br>
                    <button class="paypal-button" id="paypalbut">PayPal</button>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="button-container">
            <button @click="goBack">BACK</button>
            <button @click="goNext">NEXT</button>
        </div>

    <div class="footer">
        <Footer />
    </div>
</main>
</template>

<script>
import TopSection from '../components/TopSection.vue';
import Footer from '../components/Footer.vue';

export default {
    components: {
        TopSection,
        Footer
    },
    data() {
        return {
            step:  1,
            email: '',
            firstname: '',
            lastname: '',
            birthdate: '',
            gender: '',
            phonenumber:'',
            activationdate:'',
            homeClub: '',
            subscriptionType: '',
            water: '',
            sauna: '',
            massage: '',
            none:'',
            paymentMethod: '',
            CardHolderName:'',
            cardholderlastname:'',
            cvv:'',
            creditcarddate:'',
        };
    },
    methods: {
        goBack() {
            if (this.step >  1) {
                this.step--;
            }else{
                this.$router.push('/prices')
            }
        },
    goNext() {
        // Validate input before advancing
        if (this.step ===  1 && !this.email) {
            alert('Please enter your email address.');
            return;
        }
        if (this.step ===  1 && !this.firstname) {
            alert('Please enter your first name.');
            return;
        }
        if (this.step ===  1 && !this.lastname) {
            alert('Please enter your last name.');
            return;
        }
        if (this.step ===  1 && !this.gender) {
            alert('Please select your gender.');
            return;
        }
        if (this.step ===  1 && !this.birthdate) {
            alert('Please enter your birth date.');
            return;
        }
        if (this.step ===  1 && !this.phonenumber) {
            alert('Please enter your phone number.');
            return;
        }
        if (this.step ===  1 && !this.activationdate) {
            alert('Please enter your activation date of membership.');
            return;
        }
        if (this.step ===  2 && !this.homeClub) {
            alert('Please select your home club.');
            return;
        }
        if (this.step ===  2 && !this.subscriptionType) {
            alert('Please select your subscription type.');
            return;
        }
        this.step++;

        if (this.step >  3) {
            this.$router.push('/prices');
        }
    }
}   
}

</script>

<style scoped>

.paypal-button{
    width: 10rem;
}
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
    top: 2rem;
    height: 38rem;
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
    display: flex;
    z-index: 2;
}


.required{
    color: red;
}

.details-content{
    width: 30rem;
    position: relative;

}
.personal-details{
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    align-content: center;
    justify-content: center;
    background-color: #f8f8f8;
    border:  1px solid var(--TeaGreen);
    border-radius:  5px;
    padding-top: 1rem;
   
}

.gym-details{
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    align-content: center;
    justify-content: center;
    background-color: #f8f8f8;
    border:  1px solid var(--TeaGreen);
    border-radius:  5px;
    padding-top: 1rem;
}

.personal-details input{
    position: relative;
    width: 20rem;

}
.button-container{
    width: 100%;
    height: 3rem;
    position: relative;
    margin: 0;
    padding: 0%;
    display: flex;
    justify-content: center;
    align-content: center;
    left: -0.5rem;
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

.credit-card-details {
    width:  100%;
    max-width:  400px;
    padding:  20px;
    background-color: #f8f8f8;
    border:  1px solid #e0e0e0;
    border-radius:  5px;
    margin-top:  20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.credit-card-details label {
    margin-bottom:  5px;
}

.paypal-method{
    width:  100%;
    max-width:  400px;
    padding:  20px;
    background-color: #f8f8f8;
    border:  1px solid #e0e0e0;
    border-radius:  5px;
    margin-top:  20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.paypal-method button{
    left: 6rem;
}

.footer{
    position: relative;
    top: 10rem;
}

</style>