<template>
  <div>
    <p>MODULE VIEW</p>
    <PlanningAssistantCard />
  </div>
</template>

<script>
import PlanningAssistantCard from './PlanningAssistant/PlanningAssistantCard.vue';
// import ActivityCard from './Activity/ActivityCard.vue';
// import AssignmentsCard from './Assignments/AssignmentsCard.vue';
// import LearningGoalsCard from './LearningGoals/LearningGoalsCard.vue';
// import LearningMaterialsCard from './LearningMaterials/LearningMaterialsCard.vue';
// import SuccessChanceCard from './SuccessChance/SuccessChanceCard.vue';
// import StudyProgressCard from './StudyProgress/StudyProgressCard.vue';


export default {
  name: 'ModuleView',
  components: {
    PlanningAssistantCard,
    // ActivityCard,
    // LearningGoalsCard,
    // LearningMaterialsCard,
    // SuccessChanceCard,
    // AssignmentsCard,
    // StudyProgressCard,
  },
};
</script>
