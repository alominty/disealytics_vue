<template>
  <div>
    <button @click="showModal">Add Event</button>
    <planning-assistant-modal v-if="isModalVisible" @close="isModalVisible = false" @save="addEvent"></planning-assistant-modal>
    <calendar :events="events"></calendar>
  </div>
</template>

<script>
import { usePlanningAssistantStore } from '@/stores/planningAssistantStore';
import PlanningAssistantModal from './PlanningAssistantModal.vue';
import Calendar from './Calendar.vue';

export default {
  name: 'PlanningAssistantCard',
  components: {
    PlanningAssistantModal,
    Calendar
  },
  data() {
    return {
      isModalVisible: false
    };
  },
  computed: {
    events() {
      const store = usePlanningAssistantStore();
      return store.events;
    }
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    addEvent(event) {
      const store = usePlanningAssistantStore();
      store.addEvent(event);
      this.isModalVisible = false;
    }
  },
  mounted() {
    const store = usePlanningAssistantStore();
    store.fetchEvents();
  }
};
</script>
