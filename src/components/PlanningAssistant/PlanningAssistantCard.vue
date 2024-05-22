<template>
  <Card :title="title">
    <div>
      <!-- Planning Assistant specific content goes here -->
      <p>Planning Assistant Content</p>
    </div>
  </Card>
</template>

<script>
import { inject } from 'vue';
import Card from '../Card.vue';

export default {
  name: 'PlanningAssistant',
  components: {
    Card,
  },
  setup() {
    const langStrings = inject('langStrings');
    const title = langStrings ? langStrings.planning_assistant_card : 'Planning Assistant';

    return {
      title,
    };
  },
};
</script>

<style scoped>
/* Add any specific styles for the Planning Assistant here */
</style>
