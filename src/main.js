import { createApp } from 'vue';
import App from './App.vue';
import { createPinia } from 'pinia';

const app = createApp(App);
app.use(createPinia());

/**
 * Initialize the Vue application.
 *
 * @param {Object} langStrings The language strings.
 */
export function init(langStrings) {
    app.provide('langStrings', langStrings);
    app.mount('#vue-app');
}
