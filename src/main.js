import { createApp } from 'vue';
import App from './App.vue';
import { createPinia } from 'pinia';

const app = createApp(App);
app.use(createPinia());

export function init(langStrings) {
    app.provide('langStrings', langStrings);
    app.mount('#vue-app');
}
