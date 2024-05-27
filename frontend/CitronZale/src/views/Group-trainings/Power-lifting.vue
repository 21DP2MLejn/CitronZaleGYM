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
import powerlifting from '../../assets/Images/power-lifting.jpg';

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Powerlifting',
      pageDescription: 'Powerlifting is a strength sport that focuses on maximizing the amount of weight lifted in three specific lifts: the squat, bench press, and deadlift. This training method aims to develop maximum muscular strength and power. Powerlifting requires precise technique, dedication, and progressive overload to improve performance.',
      musclegroupDescription: 'Powerlifting primarily targets the major muscle groups involved in the three main lifts, providing a comprehensive approach to building overall strength and muscle mass.',
      list1: 'Quadriceps',
      list2: 'Hamstrings',
      list3: 'Glutes',
      list4: 'Chest',
      list5: 'Back (Upper and Lower)',
      list6: 'Core (Abdominals and Lower Back)',
      imageURL: powerlifting,
    };
  },
};
</script>

<style scoped>

</style>