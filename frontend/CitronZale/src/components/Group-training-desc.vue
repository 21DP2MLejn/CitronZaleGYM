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
                </ul>
            </div>
        </div>
    </main>
</template>

<script>
import GrouptTrainingComponentVue from './Groupt-training-component.vue'
export default {
    name:GrouptTrainingComponentVue,
    props: {
        title: String,
        description: String,
        muscle_group_description: String,
        list_item1: String,
        list_item2: String,
        list_item3: String,
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
</style>