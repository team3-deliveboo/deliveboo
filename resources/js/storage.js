import Vue from "vue";

const app = new Vue({
  el: '#store',
  data: {
    cart: [],
  },

  mounted() {
    if (localStorage.getItem('cart')) {
      try {
        this.cart = JSON.parse(localStorage.getItem('cart'));
      } catch (e) {
        localStorage.removeItem('cart');
      }
    }
  },
})