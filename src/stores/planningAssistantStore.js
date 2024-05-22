import { defineStore } from 'pinia';
import axios from 'axios';

export const usePlanningAssistantStore = defineStore('planningAssistant', {
    state: () => ({
        events: [],
        loading: false,
        error: null,
    }),
    actions: {
        async fetchEvents() {
            this.loading = true;
            try {
                const response = await axios.get('/blocks/disealytics_vue/api/planningAssistant.php');
                this.events = response.data;
            } catch (error) {
                this.error = error;
            } finally {
                this.loading = false;
            }
        },
        async addEvent(event) {
            try {
                const response = await axios.post('/blocks/disealytics_vue/api/add_event.php', event);
                this.events.push(response.data);
            } catch (error) {
                this.error = error;
            }
        },
        async updateEvent(event) {
            try {
                const response = await axios.post('/blocks/disealytics_vue/api/update_event.php', event);
                const index = this.events.findIndex(e => e.id === event.id);
                if (index !== -1) {
                    this.events[index] = response.data;
                }
            } catch (error) {
                this.error = error;
            }
        }
    }
});
