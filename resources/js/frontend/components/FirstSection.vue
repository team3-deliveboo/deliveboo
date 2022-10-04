<template>
    <div class="filter-restaurant">

        <div class="container py-5">
            <h1 class="text-center fw-bold text-white">Le categorie più richieste sulla tua città</h1>

            <div class="categories">
                <div class="row row-cols-2 gy-3 justify-content-center gap-2">
                    <div class="col-3 col-sm-2 col-lg-1" v-for="category in categories" :key="category.id">
                        <div class="category-tag">
                            <label :for="category.id" tabindex = "0" class="animate__animated animate__zoomIn flex-shrink-0">
                                <input type="checkbox" v-model="selected" :value="category.name" :id="category.id" />
                                <img :src="'img/' + category.name + '.png'" :alt="'Immagine della categoria' + ' ' + category.name" class="category-img">
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY FILTER -->
            <div v-if="SelectFilter.length > 0">
                <div class="container">
                    <div class="restaurant-section animate__animated animate__fadeIn">

                        <div class="text-center pb-4" style="font-family: IBM Plex Sans Arabic;">
                            <h6 class="header">Ristoranti della categoria {{ selected[0] }} nella tua città:</h6>
                        </div>

                        <!-- RESTAURANT CARD -->
                        <div class="row gy-4 m-0 justify-content-sm-center">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3" v-for="restaurant in SelectFilter" :key="restaurant.id">
                                <router-link class="text-dark text-decoration-none" :to="{ name: 'users.show', params: { slug: restaurant.slug }}">

                                    <div class="card-restaurant d-flex">
                                        <div class="restaurant-img">
                                            <img :src="getImg(restaurant)" alt="/" />
                                        </div>

                                        <div class="px-2 py-2 d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <span><b>{{ restaurant.name }}</b></span>
                                            </div>
                                            <div class="place-order">
                                                <small class="opacity-75"><i class="fa-solid fa-utensils"></i> Ordina qui</small>
                                            </div>
                                        </div>
                                    </div>

                                </router-link>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: 'FirstSection',
    data() {
        return {
            selected: [],
            restaurants: [],
            categories: [],
            filterInput: "",
        };
    },
    methods: {
        result(str) {
            str.match(/[a-z]+|[^a-z]+/gi).join(this.separator);
        },
        // GET CATEGORIES
        fetchCategories() {
            axios.get("/api/categories").then((resp) => {
                this.categories = resp.data;
            });
        },
        // GET USERS
        fetchUsers() {
            axios.get("/api/users").then((resp) => {
                this.restaurants = resp.data;
            });
        },

        // GET IMG
        getImg(restaurant) {
            if (!restaurant.img) {
                return "/storage/placeholder.webp";
            }
            return "/storage/" + restaurant.img;
        },
    },
    computed: {
        // FILTER THROUGH CATEGORIES
        SelectFilter() {
            const value = this.selected;

            return this.restaurants.filter(function (restaurant) {
                const categories = restaurant.categories;
                const filledCategory = categories.filter(function (category) {
                    const allCategory = category.name;

                    if (value.length == 0) {
                        return
                    } else {
                        return allCategory.indexOf(value) > -1;
                    }
                });
                return filledCategory.length > 0;
            });
        },
    },
    mounted() {
        this.fetchCategories();
        this.fetchUsers();
    },
};
</script>

<style lang="scss" scoped>
@import "~/resources/sass/backend/_variables.scss";
@import "resources/sass/frontend/buttons.scss";

.filter-restaurant {
    overflow: hidden;
    background: rgb(0,126,137);
    background: linear-gradient(125deg, rgba(0,126,137,1) 0%, rgba(34,194,183,1) 100%);
    font-family: 'IBM Plex Sans Arabic', sans-serif;

    .categories {
        width: 100%;
        min-height: 240px;
        display: flex;
        justify-content: center;
        padding: 2rem 0;
        position: sticky;
        background-color: transparent;
        top: 0;

        .category-tag {
            width: 100%;
            position: relative;
            display: flex;
            justify-content: center;

            input[type=checkbox] {
                display: none;
                position: absolute;
                top: 0;
                opacity: 0;
                cursor: pointer;
            }

            input:checked + .category-img {
                border: 1px solid goldenrod;
                box-shadow: 0 0 5px goldenrod inset;
            }

            label {
                height: 70px;
                width: 70px;
                border-radius: 10px;
                background-color: white;
                box-shadow: 0 0 5px 0px gray;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            .category-img {
                height: 100%;
                width: 100%;
                display: block;
                border-radius: 10px;
            }
        }
    }

    .restaurant-section {
        padding-top: 1rem;
        overflow-y: auto;
        height: 500px;

        .header {
            color: white;
        }

        .card-restaurant {
            height: 100%;
            width: 100%;
            background-color: white;
            display: flex;
            flex-direction: column;
            box-shadow: 0 1px 4px rgb(0 0 0 / 8%), 0 0 0 1px rgb(0 0 0 / 4%);
            border-radius: 10px;

            .restaurant-img {
                width: 100%;

                img {
                    width: 100%;
                    height: 150px;
                    border-radius: 10px 10px 0 0;
                    object-fit: cover;
                }
            }

            .restaurant-name {
                font-size: 1rem;
                color: $deliveroo-dark;
            }

            .place-order i {
                color: $deliveroo-blue;
                margin-right: .3rem;
            }
        }
    }
}
</style>
