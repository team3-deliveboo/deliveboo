import Vue from 'vue';
import Frontend from './components/Frontend.vue';

new Vue({
    el: "#app",
    render: h => h(Frontend)
})