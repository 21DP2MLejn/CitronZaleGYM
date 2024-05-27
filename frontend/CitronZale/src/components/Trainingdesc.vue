<template>
    <main>
        <div class="header-container">
            <h1>{{ title }}</h1>
        </div>
        <div v-if="imageURL" class="image-container">
            <img :src="imageURL" alt="Description Image">
        </div>
        <div class="description-container">
            <p>{{ description }}</p>
            <p>{{ muscle_group_description }}</p>
            <div class="muscle-groups">
                <ul>
                    <li>{{ list_item1 }}</li>
                    <li>{{ list_item2 }}</li>
                    <li>{{ list_item3 }}</li>
                    <li>{{ list_item4 }}</li>
                    <li>{{ list_item5 }}</li>
                    <li>{{ list_item6 }}</li>
                </ul>
            </div>
        </div>
        <div class="button-container">
            <router-link to="/group-trainings" >
                <button>Return</button>
            </router-link>
        </div>
    </main>
</template>

<script>
export default {
    name: 'Trainingdesc',
    props: {
        title: String,
        description: String,
        muscle_group_description: String,
        imageURL: String,
        list_item1: String,
        list_item2: String,
        list_item3: String,
        list_item4: String,
        list_item5: String,
        list_item6: String,
    }
}
</script>

<style scoped>

main {
    max-width: 600px;
    margin: auto;
    padding: 40px;
    background-color: var(--White);
    border: 2px solid var(--PastelGreen);
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    font-family: var(--Font), sans-serif;
    overflow: hidden;
}

.header-container {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    color: var(--Black);
    font-size: 2.5rem; 
    font-weight: var(--font-bold);
}

.image-container {
    text-align: center;
    margin-bottom: 30px;
}

.image-container img {
    max-width: 100%;
    height: auto; 
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.description-container {
    padding: 40px;
    background-color: var(--ShinyShamrock);
    border-radius: 15px;
    color: var(--Black);
    font-weight: var(--font-regular);
}

.description-container p {
    margin-bottom: 20px; 
}

.muscle-groups ul {
    list-style-type: none;
    padding: 0;
    color: var(--Black);
    font-weight: var(--font-regular);
}

.muscle-groups li {
    margin-bottom: 10px;
    font-weight: var(--font-regular);
}

.button-container button {
    background-color: var(--ShinyShamrock);
    color: var(--White);
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-family: var(--Font), sans-serif;
    position: relative;
    top: 1rem;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1); 
}

.button-container button:hover {
    background-color: var(--PastelGreen);
}
</style>