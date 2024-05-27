<template>
    <Trainingdesc 
        :title="pageTitle" 
        :description="pageDescription" 
        :muscle_group_description="musclegroupDescription"
        :imageURL="imageUrl"
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
import bodyCircleImage from '@/assets/Images/body-circle.jpg';

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Circuit Training',
      pageDescription: 'Circuit training is a form of body conditioning or resistance training using high-intensity aerobics. It targets strength building and muscular endurance. An exercise "circuit" is one completion of all prescribed exercises in the program. When one circuit is complete, one starts the first exercise again for the next circuit. This training method is highly effective for full-body workouts and can be adapted to individual fitness levels and goals.',
      musclegroupDescription: 'Circuit training sessions can vary widely, incorporating bodyweight exercises, resistance bands, free weights, and cardio elements to keep the workout engaging and comprehensive.',
      list1: 'Chest',
      list2: 'Back',
      list3: 'Shoulders',
      list4: 'Arms (Biceps and Triceps)',
      list5: 'Core (Abdominals and Lower Back)',
      list6: 'Legs (Quadriceps, Hamstrings, Glutes, and Calves)',
      imageUrl: bodyCircleImage,
    };
  },
};
</script>

<style scoped>

</style>
