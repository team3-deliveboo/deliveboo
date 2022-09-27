import Vue from 'vue';
// import Home from './pages/Home.vue';
import Frontend from "./Frontend.vue";
import VueRouter from 'vue-router';
import routes from './router';

Vue.use(VueRouter);

const store = Vue.observable({
    cart: {
        dishes: [{name: "Pasta al pesto"}],
        add(dish) {
            store.cart.dishes.push(dish)
        }
    }
})

Vue.prototype.$store = store

new Vue({
    el: "#app",
    render: (h) => h(Frontend),
    router: routes,
});
