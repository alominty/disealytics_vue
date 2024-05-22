<template>
  <div>
    <planning-assistant-card></planning-assistant-card>
    <!-- Placeholders for other cards -->
    <div>Other Card Placeholder</div>
  </div>
</template>

<script>
import PlanningAssistantCard from './PlanningAssistant/PlanningAssistantCard.vue';

export default {
  name: 'SemesterView',
  components: {
    PlanningAssistantCard
  }
};
</script>
