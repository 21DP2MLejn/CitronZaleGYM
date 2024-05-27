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
import zumba from '../../assets/Images/zumba.jpg';

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Zumba',
      pageDescription: 'Zumba is a dance fitness program that incorporates Latin and international music and dance movements. It offers a fun and energetic workout that combines cardiovascular exercise with dance routines. Zumba classes are known for their high-energy atmosphere, promoting both physical fitness and mental well-being.',
      musclegroupDescription: 'Zumba engages various muscle groups throughout the body, providing a full-body workout. It involves movements such as hip sways, twists, squats, and arm movements, targeting muscles in the core, legs, arms, and shoulders.',
      list1: 'Core (Abdominals and Lower Back)',
      list2: 'Legs (Quadriceps, Hamstrings, Glutes, and Calves)',
      list3: 'Arms (Biceps and Triceps)',
      list4: 'Shoulders',
      list5: 'Back (Upper and Lower)',
      list6: 'Chest',
      imageURL: zumba,
    };
  },
};
</script>

<style scoped>

</style>