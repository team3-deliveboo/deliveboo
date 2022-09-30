import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
import RestaurantShow from "./pages/restaurant/show.vue";
import Checkout from "./frontend/components/Checkout.vue";
// import Frontend from 'Frontend.vue';

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
        path: "/users/:slug",
        component: RestaurantShow,
        name: "users.show",
    },

    {
        path: "/checkout",
        component: Checkout,
        name: "checkout",
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
