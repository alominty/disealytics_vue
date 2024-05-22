<template>
  <div>
    <p>GLOBAL VIEW</p>
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
  name: 'GlobalView',
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
