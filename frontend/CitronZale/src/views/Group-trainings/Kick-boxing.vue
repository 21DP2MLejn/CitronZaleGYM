<template>
    <Trainingdesc 
        :title="pageTitle" 
        :description="pageDescription" 
        :muscle_group_description="musclegroupDescription"
        :imageURL="imageURL"
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
import kickboxing from '../../assets/Images/kick-boxing.jpg';

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Kickboxing',
      pageDescription: 'Kickboxing is a high-energy workout that combines martial arts techniques with fast-paced cardio. This full-body workout is excellent for improving cardiovascular endurance, strength, coordination, and flexibility. Kickboxing sessions typically include a mix of punches, kicks, and other striking techniques.',
      musclegroupDescription: 'Kickboxing engages a variety of muscle groups, providing a comprehensive and dynamic workout. It helps to enhance overall fitness, agility, and strength.',
      list1: 'Shoulders',
      list2: 'Arms (Biceps and Triceps)',
      list3: 'Core (Abdominals and Obliques)',
      list4: 'Glutes',
      list5: 'Quadriceps',
      list6: 'Calves',
      imageURL: kickboxing,
    };
  },
};
</script>

<style scoped>

</style>