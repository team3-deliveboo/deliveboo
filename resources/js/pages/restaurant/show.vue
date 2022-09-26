<template>
  <div>
    <h1 class="mt-3">{{ restaurant.name }}</h1>
    <div>
      <ul class="list-group">
        <li class="list-group-item mb-2  ms-5 me-5" v-for="dish in restaurant.dishes" :key="dish.id">
          <img class="dish-img rounded" :src="'/storage/' + dish.img" alt="" />
          <span>{{ dish.name }}</span>
          <span>{{ dish.price + "€" }}</span>
          <button>add</button>
        </li>
      </ul>
      <CartComp></CartComp>
    </div>
  </div>
</template>

<script>
import CartComp from "../../frontend/components/CartComp.vue";
import axios from "axios";
export default {
  data() {
    
    return {
      restaurant: {},
    };
  },
  components:{ CartComp},
  methods: {},
  mounted() {
    // console.log(this.$route);
    axios.get("api/users/" + this.$route.params.slug).then((resp) => {
      const data = resp.data;
      this.restaurant = data;
    });
  },
};
</script>
<style  lang="scss" scoped>
.dish-img {
  aspect-ratio: 1/1;
  width: 100px;
}
</style>