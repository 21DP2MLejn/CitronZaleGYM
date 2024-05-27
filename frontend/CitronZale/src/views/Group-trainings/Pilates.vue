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
import pilates from '../../assets/Images/pilatesimg.jpg'

export default {
  components: {
    Trainingdesc,
  },
  data() {
    return {
      pageTitle: 'Pilates',
      pageDescription: 'Pilates is a low-impact exercise method that emphasizes core strength, flexibility, balance, and overall body awareness. It involves a series of controlled movements performed on a mat or using specialized equipment. Pilates is suitable for all fitness levels and is known for its benefits in improving posture and preventing injuries.',
      musclegroupDescription: 'Pilates workouts focus on precise movements and breathing techniques to engage various muscle groups, promoting a balanced and strong body.',
      list1: 'Core (Abdominals and Lower Back)',
      list2: 'Glutes',
      list3: 'Hamstrings',
      list4: 'Hip Flexors',
      list5: 'Shoulders',
      list6: 'Back (Upper and Lower)',
      imageURL: pilates,
    };
  },
};
</script>


<style scoped>

</style>