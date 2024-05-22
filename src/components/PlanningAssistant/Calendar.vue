<template>
  <div>
    <div v-for="event in events" :key="event.id">
      <p>{{ event.title }} - {{ event.date }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Calendar',
  props: {
    events: {
      type: Array,
      required: true
    }
  }
};
</script>
