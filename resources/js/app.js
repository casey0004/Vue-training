import './bootstrap';
window.Vue = require("vue").default;

import{createApp} from 'vue'

import App from './components/main.vue';
createApp(App).mount('#app');
