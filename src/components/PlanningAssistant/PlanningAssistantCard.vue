<template>
  <Card :title="title">
    <div>
      <p v-if="viewMode === 'module'">Module-specific content for Planning Assistant</p>
      <p v-else-if="viewMode === 'semester'">Semester-specific content for Planning Assistant</p>
      <p v-else-if="viewMode === 'global'">Global-specific content for Planning Assistant</p>
      <p v-else>Default content for Planning Assistant</p>
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
  props: {
    viewMode: {
      type: String,
      required: true,
    },
  },
  setup(props) {
    const langStrings = inject('langStrings');
    const title = langStrings ? langStrings.planning_assistant_card : 'Planning Assistant';

    return {
      title,
      viewMode: props.viewMode,
    };
  },
};
</script>

<style scoped>
/* Add any specific styles for the Planning Assistant here */
</style>
