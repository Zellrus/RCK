import { createApp } from 'vue'; // подключение вью

import './bootstrap';
import router from './router';

import Index from "./components/Index.vue";
import i18n from "./plugins/i18n/i18n.js";

createApp(Index)
    .use(router)
    .use(i18n)
    .mount('#app')
