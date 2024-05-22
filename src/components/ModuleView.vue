<template>
  <Card title="Module View">
    <PlanningAssistant :viewMode="viewMode" />
  </Card>
</template>

<script>
import Card from './Card.vue';
import PlanningAssistant from './PlanningAssistant/PlanningAssistantCard.vue';

export default {
  name: 'ModuleView',
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
