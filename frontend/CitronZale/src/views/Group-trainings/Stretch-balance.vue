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
      pageTitle: 'Stretch and Balance Training',
      pageDescription: 'Stretch and balance training focuses on improving flexibility, stability, and overall body control. This type of training involves a variety of exercises that enhance the range of motion of joints, strengthen stabilizing muscles, and promote better body alignment. It is beneficial for preventing injuries, reducing muscle tension, and improving posture.',
      musclegroupDescription: 'Stretch and balance workouts engage multiple muscle groups and are often low-impact, making them suitable for all fitness levels. These exercises can be performed using bodyweight, resistance bands, or stability tools such as balance boards.',
      list1: 'Core (Abdominals and Lower Back)',
      list2: 'Hip Flexors',
      list3: 'Quadriceps',
      list4: 'Hamstrings',
      list5: 'Calves',
      list6: 'Shoulders',
    };
  },
};
</script>

<style scoped>

</style>