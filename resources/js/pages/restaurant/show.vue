<template>
    <div>
        <h1>{{restaurant.name}}</h1>
        <div>
            <ul>
                <li v-for="dish in restaurant.dishes" :key="dish.id">
                    <span>{{dish.name}}</span>
                    <span>{{dish.price + '€'}}</span>
                    <button>add</button>
                </li>
            </ul>

        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            restaurant: {}
        }
    },
    methods: {

    },
    mounted() {
        // console.log(this.$route);
        axios.get('api/users/' + this.$route.params.slug)
            .then(resp => {
                const data = resp.data
                this.restaurant = data;
            })

    }

}
</script>