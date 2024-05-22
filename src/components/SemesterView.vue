<template>
  <Card title="Semester View">
    <PlanningAssistant :viewMode="viewMode" />
  </Card>
</template>

<script>
import Card from './Card.vue';
import PlanningAssistant from './PlanningAssistant/PlanningAssistantCard.vue';

export default {
  name: 'SemesterView',
  components: {
    Card,
    PlanningAssistant,
  },
  props: {
    viewMode: {
      type: String,
      required: true,
    },
  },
};
</script>
