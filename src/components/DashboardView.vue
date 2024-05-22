<template>
  <div>
    <select v-model="selectedView" @change="changeView">
      <option value="module">Module View</option>
      <option value="semester">Semester View</option>
      <option value="global">Global View</option>
    </select>
    <router-view></router-view>
  </div>
</template>

<script>
import { useRouter } from 'vue-router';
import { ref } from 'vue';

export default {
  name: 'DashboardView',
  setup() {
    const router = useRouter();
    const selectedView = ref('module');

    const changeView = () => {
      router.push({ path: `/${selectedView.value}` });
    };

    return {
      selectedView,
      changeView
    };
  }
};
</script>
