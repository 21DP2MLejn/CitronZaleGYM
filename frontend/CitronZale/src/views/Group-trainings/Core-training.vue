<template>
    <Trainingdesc 
        :title="pageTitle" 
        :description="pageDescription" 
        :muscle_group_description="musclegroupDescription" 
        :list_item1="list1" 
        :list_item2="list2" 
        :list_item3="list3" 
    />
</template>

<script>
import Trainingdesc from '../../components/Trainingdesc.vue';

export default {
  components: {
    Trainingdesc,
  },
    data(){
        return{
            pageTitle: 'Core Training',
            pageDescription: 'Core training focuses on strengthening the muscles in your abdomen, lower back, hips, and pelvis, collectively known as the core. A strong core is essential for overall stability, balance, and injury prevention. Core training can include a variety of exercises that target these muscles through different movements and resistance techniques.',
            musclegroupDescription: 'Core training sessions can incorporate exercises such as planks, sit-ups, Russian twists, and leg raises. These exercises can be performed using bodyweight, stability balls, resistance bands, and free weights to enhance the effectiveness of the workout.',
            list1: 'Abdominals',
            list2: 'Obliques',
            list3: 'Lower Back',
        }
    }
}
</script>

<style scoped>

</style>