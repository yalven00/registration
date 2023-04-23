import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import App from './components/App.vue';
import Register from './components/RegisterComponent.vue';
import Login from './components/LoginComponent.vue';
import Dashboard from './components/DashboardComponent.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/registration/create', component: Register },
        { path: '/registration/login', component: Login },
        { path: '/registration/dashboard', component: Dashboard },
        { path: '/', component: App },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');

