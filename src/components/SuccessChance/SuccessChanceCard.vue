<template>
  <Card :title="title">
    <div>
      <!-- Success Chance specific content goes here -->
      <p>Success Chance Content</p>
    </div>
  </Card>
</template>

<script>
import Card from '../Card.vue';

export default {
  name: 'SuccessChance',
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
    this.title = await strings.getString('success_chance_card', 'block_disealytics_vue');
  },
};
</script>

<style scoped>
/* Add any specific styles for the Planning Assistant here */
</style>
