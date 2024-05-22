<template>
  <Card :title="title">
    <div>
      <!-- Learning Goals specific content goes here -->
      <p>Learning Goals Content</p>
    </div>
  </Card>
</template>

<script>
import Card from '../Card.vue';

export default {
  name: 'LearningGoals',
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
    this.title = await strings.getString('learning_goals_card', 'block_disealytics_vue');
  },
};
</script>

<style scoped>
/* Add any specific styles for the Planning Assistant here */
</style>
