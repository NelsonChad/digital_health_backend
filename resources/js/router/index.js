import { createRouter, createWebHistory } from 'vue-router';
import Home from '@/Pages/Home.vue';
import Dashboard from '@/Components/Dashboard.vue';
import Inventory from '@/Components/Inventory.vue';

const routes = [
    { path: '/dashboard', component: Dashboard },
    { path: '/inventory', component: Inventory },
    { path: '/home', component: Home },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;