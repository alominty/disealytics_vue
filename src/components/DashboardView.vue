<template>
  <div>
    <select v-model="selectedView">
      <option value="module">Module View</option>
      <option value="semester">Semester View</option>
      <option value="global">Global View</option>
    </select>

    <component :is="currentView" :viewMode="selectedView"></component>
  </div>
</template>

<script>
import ModuleView from './ModuleView.vue';
import SemesterView from './SemesterView.vue';
import GlobalView from './GlobalView.vue';
import { ref, computed } from 'vue';

export default {
  name: 'DashboardView',
  components: {
    ModuleView,
    SemesterView,
    GlobalView
  },
  setup() {
    const selectedView = ref('module');

    const currentView = computed(() => {
      if (selectedView.value === 'module') return 'ModuleView';
      if (selectedView.value === 'semester') return 'SemesterView';
      if (selectedView.value === 'global') return 'GlobalView';
      return 'ModuleView';
    });

    return {
      selectedView,
      currentView
    };
  }
};
</script>
