//import vue router
import { createRouter, createWebHistory } from 'vue-router'
import masterRoutes from '../views/master/master-index'
//define a routes
const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import( /* webpackChunkName: "home" */ '../views/home.vue')
    },
    {
        path: '/pegawai-dashboard',
        name: 'pegawai',
        component: () => import( /* webpackChunkName: "home" */ '../views/PegawaiDashboard.vue')
    },
    {
        path: '/test',
        name: 'test',
        component: () => import( /* webpackChunkName: "home" */ '../views/test.vue')
    },
    {
        path: '/auth',
        name: 'auth',
        component: () => import( /* webpackChunkName: "home" */ '../views/Login/auth.vue')
    },

    ...masterRoutes,
];

//create router
const router = createRouter({
    history: createWebHistory(),
    routes // <-- routes,
})

export default router