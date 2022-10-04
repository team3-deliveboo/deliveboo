import Vue from 'vue';
import Frontend from './Frontend.vue';
import VueRouter from 'vue-router';
import routes from './router';

new Vue({
    el: "#app",
    render: (h) => h(Frontend),
    router: routes,
});
