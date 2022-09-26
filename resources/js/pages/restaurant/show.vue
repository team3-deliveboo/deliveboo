<template>
    <div>
        <h1 class="mt-3">{{ restaurant.name }}</h1>
        <div>
            <ul class="list-group">
                <li class="list-group-item mb-2  ms-5 me-5" v-for="dish in restaurant.dishes" :key="dish.id">
                    <img class="dish-img rounded" :src="'/storage/' + dish.img" alt="" />
                    <span>{{ dish.name }}</span>
                    <span>{{ dish.price + "€" }}</span>
                    <button @click="addItemToCart(dish)">add</button>
                </li>
            </ul>
            <CartComp></CartComp>
        </div>
        <div v-for="item in itemsOnLocal" :key="item.name">
            <span>{{item.name}}</span>
        </div>
        {{itemsOnLocal}}
    </div>

</template>

<script>
import CartComp from "../../frontend/components/CartComp.vue";
import axios from "axios";
export default {
    data() {

        return {
            cart: [],
            itemsOnLocal: [],
            restaurant: {},
        };
    },
    components: { CartComp },
    methods: {
        addItemToCart(item) {
            this.cart.push(item);
            localStorage.setItem('cart', JSON.stringify(this.cart));
            
            // this.itemsInLocal = localStorage.getItem(this.cart);
            
            
            
            
        },
        
        
    },
    // watch:{
    //     cart:{
    //         handler(){
    //             console.log('cart array change');
    //             this.itemsOnLocal = localStorage.getItem('cart')
    //         },
    //         deep:true,

    // }
    // },
    mounted() {
        this.itemsOnLocal = localStorage.getItem('cart');
        // console.log(this.$route);
        axios.get("api/users/" + this.$route.params.slug).then((resp) => {
            const data = resp.data;
            this.restaurant = data;
        });
        localStorage.removeItem('cart');

    },
};
</script>
<style  lang="scss" scoped>
.dish-img {
    aspect-ratio: 1/1;
    width: 100px;
}
</style>