// views/master/master-index.ts
import { RouteRecordRaw } from "vue-router";

// Define routes
const masterRoutes: Array<RouteRecordRaw> = [
  {
    path: "/master-jabatan",
    name: "master-jabatan",
    component: () => import("./master-jabatan.vue"),
  },

  {
    path: "/master-pegawai",
    name: "master-pegawai",
    component: () => import("./master-pegawai.vue"),
  },

  {
    path: "/master-departemen",
    name: "master-departemen",
    component: () => import("./master-departemen.vue"),
  },
];

//create router

export default masterRoutes;
