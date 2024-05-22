<template>
  <div class="modal">
    <h2>Add Event</h2>
    <input v-model="event.title" placeholder="Event Title">
    <input v-model="event.date" type="date" placeholder="Event Date">
    <button @click="save">Save</button>
    <button @click="$emit('close')">Close</button>
  </div>
</template>

<script>
export default {
  name: 'PlanningAssistantModal',
  data() {
    return {
      event: {
        title: '',
        date: ''
      }
    };
  },
  methods: {
    save() {
      this.$emit('save', this.event);
    }
  }
};
</script>
