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
      pageTitle: 'Indoor Cycling',
      pageDescription: 'Indoor cycling is a high-intensity cardio workout performed on a stationary bike. It is designed to improve cardiovascular health, burn calories, and build muscle endurance. The workout can vary in intensity, involving different speeds, resistance levels, and cycling positions to provide a comprehensive fitness experience.',
      musclegroupDescription: 'Indoor cycling primarily targets the lower body but also engages several muscle groups for a full-body workout. It can be modified to suit different fitness levels and goals.',
      list1: 'Quadriceps',
      list2: 'Hamstrings',
      list3: 'Glutes',
      list4: 'Calves',
      list5: 'Core (Abdominals and Lower Back)',
      list6: 'Hip Flexors',
    };
  },
};
</script>


<style scoped>

</style>