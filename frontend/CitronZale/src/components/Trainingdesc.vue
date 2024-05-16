<template>
    <main>
        <div class="header-container">
            <h1>{{ title }}</h1>
        </div>
        <div class="image-container">
            <img src="https://via.placeholder.com/150" alt="Workout">
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
    padding: 20px;
    background-color: var(--White);
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.header-container {
    text-align: center;
    margin-bottom: 20px;
}

h1 {
    color: var(--Black);
}

.image-container {
    text-align: center;
    margin-bottom: 20px;
}

.image-container img {
    max-width: 100%;
    border-radius: 10px;
}

.description-container {
    padding: 20px;
    background-color: var(--LightGray);
    border-radius: 10px;
}

.description-container p {
    color: var(--Black);
}

.muscle-groups ul {
    list-style-type: none;
    padding: 0;
}

.muscle-groups li {
    margin-bottom: 5px;
}

.button-container button {
  background-color: var(--ShinyShamrock);
  color: #fff;
  border: none;
  padding:   0.5rem   1rem;
  border-radius:   5px;
  cursor: pointer;
  transition: background-color   0.3s ease;
}

.button-container button:hover {
  background-color: var(--PastelGreen);
}
</style>