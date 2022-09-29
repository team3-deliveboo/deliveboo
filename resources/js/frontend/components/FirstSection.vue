<template>
    <div class="restaurant-section">
        <div class="container">
            <div class="search-bar">
                <button class="fork">
                    <i class="fa-solid fa-utensils"></i>
                </button>
                <input type="text" class="form-control" placeholder="Italiano? Vegano? Stellato?"
                    v-model="filterInput" />
                <button class="search-btn" type="button" id="button-addon1">
                    Cerca
                </button>
            </div>
            <div class="row gy-3">
                <div class="form-check d-flex flex-wrap justify-content-between">
                    <div class="col-4" v-for="category in categories" :key="category.id">
                        <input class="form-check-input" type="checkbox" v-model="selected" :value="category.name"
                            :id="category.id" />
                        <label class="form-check-label" :for="category.id">{{
                        category.name }}</label>
                    </div>
                    <div>
                        <div>
                            <h2>Hai cercato {{ selected }}</h2>
                        </div>

                        <button @click="SelectFilter()" type="button" class="btn btn-primary mt-5">
                            Apply filter
                        </button>
                    </div>
                </div>

                <!-- ///////////////////// -->
                <div v-if="SelectFilter.length > 0">
                    <div class="col-4" v-for="restaurant in SelectFilter" :key="restaurant.id">
                        <router-link class="text-dark text-decoration-none" :to="{
                          name: 'users.show',
                          params: { slug: restaurant.slug },
                        }">
                            <div class="card-restaurant d-flex flex-column">
                                <div class="restaurant-img">
                                    <img :src="getImg(restaurant)" alt="/" />
                                </div>
                                <div class="restaurant-name">
                                    {{ restaurant.name }}
                                </div>
                                <div v-if="restaurant.categories">
                                    <span v-for="category in restaurant.categories" :key="category.id">
                                        <span>{{ category.name + " " }}</span>
                                    </span>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
                <div v-else-if="filteredList.length > 0">
                    <div class="col-4" v-for="restaurant in filteredList" :key="restaurant.id">
                        <router-link class="text-dark text-decoration-none" :to="{
                          name: 'users.show',
                          params: { slug: restaurant.slug },
                        }">
                            <div class="card-restaurant d-flex flex-column">
                                <div class="restaurant-img">
                                    <img :src="getImg(restaurant)" alt="/" />
                                </div>
                                <div class="restaurant-name">
                                    {{ restaurant.name }}
                                </div>
                                <div v-if="restaurant.categories">
                                    <span v-for="category in restaurant.categories" :key="category.id">
                                        <span>{{ category.name + " " }}</span>
                                    </span>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
                <div v-else>
                    <div class="col-4" v-for="restaurant in restaurants" :key="restaurant.id">
                        <router-link class="text-dark text-decoration-none" :to="{
                          name: 'users.show',
                          params: { slug: restaurant.slug },
                        }">
                            <div class="card-restaurant d-flex flex-column">
                                <div class="restaurant-img">
                                    <img :src="getImg(restaurant)" alt="/" />
                                </div>
                                <div class="restaurant-name">
                                    {{ restaurant.name }}
                                </div>
                                <div v-if="restaurant.categories">
                                    <span v-for="category in restaurant.categories" :key="category.id">
                                        <span>{{ category.name + " " }}</span>
                                    </span>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "FirstSection",

    data() {
        return {

            // categoryName: [].join(" - "),
            selected: [],
            restaurants: [],
            categories: [],
            filterInput: "",
            // nuovoArrayRistoranti: [],
        };
    },
    methods: {
        result(str) {
            str.match(/[a-z]+|[^a-z]+/gi).join(this.separator);
        },

        fetchCategories() {
            axios.get("/api/categories").then((resp) => {
                // console.log(resp);

                this.categories = resp.data;
                // console.log(this.categories);
            });
        },

        fetchUsers() {
            axios.get("/api/users").then((resp) => {
                this.restaurants = resp.data;
            });
        },

        // filterBy(list, value) {
        //     value = value.charAt(0).toUpperCase() + value.slice(1);
        //     return list.filter(function (restaurant) {
        //         return restaurant.name.indexOf(value) > -1;
        //     });
        // },

        getImg(restaurant) {
            if (!restaurant.img) {
                return "/storage/placeholder.webp";
            }
            return "/storage/" + restaurant.img;
        },
    },

    computed: {
        SelectFilter() {
            const value = this.selected;

            return this.restaurants.filter(function (restaurant) {
                const categories = restaurant.categories;
                // for (let i = 0; i < categories.length; i++) {}
                const filledCategory = categories.filter(function (category) {
                    const allCategory = category.name;

                    // console.log(allCategory.indexOf(value) > -1);
                    if (value.length == 0) {
                        return
                    } else {
                        return allCategory.indexOf(value) > -1;
                    }

                });
                console.log(filledCategory);
                return filledCategory.length > 0;

            });

            console.log();
        },

        filteredList() {
            const value = this.filterInput;

            return this.restaurants.filter(function (restaurant) {
                return restaurant.name.indexOf(value) > -1;

                // restaurant.category.indexOf(value) > -1 ||
                // restaurant.address.indexOf(value) > -1
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

.search-bar {
    display: flex;
    position: relative;
    bottom: 8rem;
    align-items: center;
    width: 40%;
    margin-left: auto;
    margin-right: auto;

    .form-control {
        border: none;
        padding-left: 45px;
    }

    input {
        padding: 1.2rem;
        border-radius: 50px;
        width: 100%;

        &::placeholder {
            color: lighten($color: gray, $amount: 20);
        }
    }

    button.fork {
        color: $deliveroo-blue;
        padding: 1.2rem;
        border: none;
        border-radius: 50px 0px 0px 50px;
        background-color: white;
        width: 20px;
        height: 100%;
        position: absolute;
    }

    .search-btn {
        position: absolute;
        right: 3.5px;
    }
}

.restaurant-section {
    background: rgb(0, 126, 137);
    background: linear-gradient(125deg,
            rgba(0, 126, 137, 1) 0%,
            rgba(34, 194, 183, 1) 100%);
    padding: 0;

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
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: $deliveroo-dark;
            font-weight: bold;
        }
    }
}
</style>
