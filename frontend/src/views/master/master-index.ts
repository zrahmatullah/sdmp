//import vue router
import { createRouter, createWebHistory } from 'vue-router'

//define a routes
const routes = [
   
    {
        path: '/master-jabatan',
        name: 'master-jabatan',
        component: () => import('./master-jabatan.vue')
    },


]

//create router
const router = createRouter({
    history: createWebHistory(),
    routes // <-- routes,
})

export default router