<template>
    <div class="restaurant-section">
        <div class="container">
            <div class="row gy-3">
                <div class="form-check">
                    <div class="col-4" v-for="category in categories" :key="category.id">
                        <input class="form-check-input" type="checkbox" v-model="selected" :value="category.name"
                            :id="category.id">
                        <label class="form-check-label" for="flexCheckIndeterminateDisabled">{{ category.name }}</label>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary">
                            Apply filter
                        </button>
                    </div>
                </div>
                <!-- <div class="col-4" v-for="category in categories" :key="category.id"></div>
                    {{ category.name }}
                </div> -->
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


                            <!-- <div class="col-4" v-for="restaurant in filterData" :key="restaurant.id">
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
                            </div> -->

                            <!-- category -->
                            <div v-if="restaurant.categories">
                                <span v-for="category in restaurant.categories" :key="category.id">
                                    <span>{{ category.name }}</span>
                                </span>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>
<!-- 
<h4>Filtra per categorie</h4>
<div class="row">
        <div
            class="col-12 d-flex justify-content-start"
            style="flex-wrap: wrap"
        >
            <div
                v-for="(category, index) in categories"
                :key="`category-${index}`"
                class="shadow p-3 mb-2 rounded d-flex align-items-center justify-content-center mx-2 my-1 checkbox-category"
            >
                <input
                    type="checkbox"
                    name="categories[]"
                    :value="category.name"
                    v-model="form.categories"
                    @change.prevent="
                        getRestaurants(
                            `${url}restaurants/searchCheck`,
                            form
                        )
                    "
                />
                <label
                    class="category-name"
                    :for="category.name"
                    >{{ category.name }}</label
                >
            </div>
        </div>
    </div> -->

<script>
import axios from "axios";

export default {
    name: "FirstSection",
    data() {
        return {
            selected: [],
            restaurants: [],
            categories: [],
            nuovoArrayRistoranti: [],
        };
    },
    methods: {
        // result(str) {
        //     str.match('\w\s\w').join(separator)
        // },

        selectCat() {
            for (let i = 0; i < this.restaurants.length; i++) {
                for (let i = 0; i < categories.length; i++) {
                    restaurant.categories.includes(category);

                }
            }
        },

        result(str) {
            str.match(/[a-z]+|[^a-z]+/gi).join(this.separator);
            // str.replace(/\s/g, " ");
        },
        fetchCategories() {
            axios.get("/api/categories").then((resp) => {
                this.categories = resp.data;
            });
        },

        fetchUsers() {
            axios.get("/api/users").then((resp) => {
                console.log(resp);
                this.restaurants = resp.data;
            });
        },
        getImg(restaurant) {
            if (!restaurant.img) {
                return "/storage/placeholder.webp";
            }
            return "/storage/" + restaurant.img;
        },
        // funzioni cecklist
        selectCategories() {
            this.nuovoArrayRistoranti = map(this.restaurants);
            console.log(selectCatecories);
        }


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

.restaurant-section {
    background: rgb(0, 126, 137);
    background: linear-gradient(125deg,
            rgba(0, 126, 137, 1) 0%,
            rgba(34, 194, 183, 1) 100%);
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
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-size: 1rem;
            text-transform: uppercase;
            color: $deliveroo-dark;
            font-weight: bold;
        }
    }
}
</style>
