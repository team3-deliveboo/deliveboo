import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",
    },
];

// const router = new VueRouter({
//     // deve contenere un array di rotte
//     routes,
//     mode: "history",
// });

export default new VueRouter({
    routes,
});
