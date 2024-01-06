<template>
    <main>
        <div class="container">
            <div class="content-container">
                <div class="image-container"></div>
                <div class="text-container">
                    <h2>CITRONZALE</h2>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: 'topsection'
}
</script>

<style scoped>
.container{
    background-color: var(--ShinyShamrock);
    width: 100%;
    height: 5rem;
    position: relative;
    padding: 1rem;
}

.image-container{
    width: 5rem;
    height: 5rem;
    background-image: url(../assets/Images/Logo.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
}

.text-container{
    position: relative;
    height: auto;
    width: auto;
    font-size: 20px;
    left: 2rem;
}

.content-container{
    position: relative;
    left: 10rem;
    width: 20rem;
    height: 5rem;
    display: flex;
    align-content: center;
    justify-content: center;
}

h2{
    color: var(--TeaGreen);
}
</style>