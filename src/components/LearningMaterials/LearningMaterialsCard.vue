<template>
  <Card :title="title">
    <div>
      <!-- Learning Materials specific content goes here -->
      <p>Learning Materials Content</p>
    </div>
  </Card>
</template>

<script>
import Card from '../Card.vue';

export default {
  name: 'LearningMaterials',
  components: {
    Card,
  },
  data() {
    return {
      title: '',
    };
  },
  async created() {
    // Load the strings AMD module using Moodle's require.js
    const strings = await new Promise((resolve, reject) => {
      require(['block_disealytics_vue/strings'], resolve, reject);
    });
    this.title = await strings.getString('learning_materials_card', 'block_disealytics_vue');
  },
};
</script>

<style scoped>
/* Add any specific styles for the Planning Assistant here */
</style>
