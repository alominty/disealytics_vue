import { createRouter, createWebHistory } from 'vue-router';
import ModuleView from '../components/ModuleView.vue';
import SemesterView from '../components/SemesterView.vue';
import GlobalView from '../components/GlobalView.vue';

const routes = [
    { path: '/', redirect: '/module' },
    { path: '/module', component: ModuleView },
    { path: '/semester', component: SemesterView },
    { path: '/global', component: GlobalView }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
