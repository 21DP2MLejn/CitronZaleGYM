<template>
    <div class="main-container">
        <title>Contact us</title>
        <div class="form-container">

            <form method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>

                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
                
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
                
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <br>
                <button>Send</button>
            </form>
        </div>
    </div>
</template>