// views/master/master-index.ts
import { RouteRecordRaw } from 'vue-router';

// Define routes
const masterRoutes: Array<RouteRecordRaw> = [

    {
        path: '/master-jabatan',
        name: 'master-jabatan',
        component: () => import('./master-jabatan.vue')
    },

];

//create router


export default masterRoutes;