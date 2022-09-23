<template>
    <div>
        <div class="row row-cols-2"></div>
        <div class="col" v-for="restaurant in restaurants" :key="restaurant.id">
            <router-link class="text-dark text-decoration-none" :to="{name:'users.show', params: { slug:restaurant.slug}} ">
                <div class="card">
                    <img class='card-img-top' :src="getImg(restaurant)" alt="">
                    <img src="userImg/xG4ZQxZoUGB5uYre5zaYSoP6C9Od7eeQ6gtYrrYy.png" alt="">
                    <h2 class="post-title">{{ restaurant.name }}</h2>
                </div>
            </router-link>
        </div>
    </div>
</template>

<!-- <a href="#" class="btn btn-primary stretched-link">Go somewhere</a> -->

<script>
import axios from "axios";

export default {
    data() {
        return {
            restaurants: [],
        }
    },
    methods: {
        fetchUsers() {
            axios.get('/api/users')
                .then((resp) => {
                    this.restaurants = resp.data;
                })
        },
        getImg(restaurant) {
            if (!restaurant.img) {
                return '/storage/placeholder.webp'
            }
            return '/storage/' + restaurant.img
        }
    },
    mounted() {
        this.fetchUsers();
    }
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';

nav {
    background-color: $deliveroo-blue;
    height: 60px;
}

.card-img-top {
    max-width: 200px;
}
</style>