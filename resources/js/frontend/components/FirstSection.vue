<template>

    <div class="restaurant-section">
        <div class="container">

            <div class="row gy-3">

                <div class="col-4" v-for="restaurant in restaurants" :key="restaurant.id">
                    <router-link class="text-dark text-decoration-none" :to="{ name: 'users.show', params: { slug: restaurant.slug }}">
                        
                        <div class="card-restaurant">
                            <div class="restaurant-img">
                                <img :src="getImg(restaurant)" alt="/">
                            </div>
                            <div class="restaurant-name">{{ restaurant.name }}</div>
                        </div>

                    </router-link>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'FirstSection',
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
@import 'resources/sass/frontend/buttons.scss';

.restaurant-section {
    background: rgb(0,126,137);
    background: linear-gradient(125deg, rgba(0,126,137,1) 0%, rgba(34,194,183,1) 100%);
    padding: 4rem 0;

    .card-restaurant {
        height: 100%;
        width: 100%;
        text-align: center;
        background-color: white;
        display: flex;
        align-items: center;
        box-shadow: 0 0 20px 0px gray;
        border-radius: 5px;
        
        .restaurant-img {
            padding: 1rem;

            img {
                height: 130px;
                width: 130px;
                border: 1px solid $deliveroo-blue;
                border-radius: 5px;
                aspect-ratio: 1/1;
            }
        }

        .restaurant-name {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: $deliveroo-dark;
            font-weight: bold;
        }
    }
}
</style>