import Vue from 'vue';
import Frontend from './components/Navbar.vue';

new Vue({
    el: "#app",
    render: h => h(Frontend)
})