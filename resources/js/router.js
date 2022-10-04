import Vue from "vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
import RestaurantShow from "./pages/restaurant/RestaurantShow.vue";
import Checkout from "./frontend/components/Checkout.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",
    },
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

export default new VueRouter({
    routes,
});
