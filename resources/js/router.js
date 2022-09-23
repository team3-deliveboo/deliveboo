import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
import RestaurantShow from './pages/restaurant/show.vue';

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",
    },
    // {
    //     path: '/menu',
    //     component: Menu,
    //     name: 'menu'
    // },
    {
        path: '/restaurant/:slug',
        component: RestaurantShow,
        name: 'restaurant.show',
    }
];

// const router = new VueRouter({
//     // deve contenere un array di rotte
//     routes,
//     mode: "history",
// });

export default new VueRouter({
    routes,
    mode: "history",
});
