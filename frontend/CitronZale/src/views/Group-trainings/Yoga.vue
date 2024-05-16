<template>
    <Trainingdesc 
        :title="pageTitle" 
        :description="pageDescription" 
        :muscle_group_description="musclegroupDescription" 
        :list_item1="list1" 
        :list_item2="list2" 
        :list_item3="list3" 
        :list_item4="list4" 
        :list_item5="list5" 
        :list_item6="list6" 
    />
</template>

<script>
import Trainingdesc from '../../components/Trainingdesc.vue';

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Yoga',
      pageDescription: 'Yoga is a holistic practice that combines physical postures, breath control, meditation, and relaxation techniques to promote overall health and well-being. It emphasizes flexibility, strength, balance, and mental clarity. Yoga offers various styles, from gentle and restorative to dynamic and challenging, allowing individuals to find a practice that suits their needs and preferences.',
      musclegroupDescription: 'Yoga engages multiple muscle groups, including those involved in strength, flexibility, and stability. It provides a low-impact workout that can improve muscle tone, reduce stress, and enhance body awareness.',
      list1: 'Core (Abdominals and Lower Back)',
      list2: 'Legs (Quadriceps, Hamstrings, Glutes, and Calves)',
      list3: 'Arms (Biceps and Triceps)',
      list4: 'Shoulders',
      list5: 'Back (Upper and Lower)',
      list6: 'Chest',
    };
  },
};
</script>

<style scoped>

</style>