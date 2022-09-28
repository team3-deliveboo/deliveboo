<template>
    <div>
        <Navbar></Navbar>
        <h1 class="mt-3">{{ restaurant.name }}</h1>
        <div>
            <ul class="list-group">
                <li class="list-group-item mb-2  ms-5 me-5" v-for="dish in restaurant.dishes" :key="dish.id">
                    <img class="dish-img rounded" :src="'/storage/' + dish.img" alt="" />
                    <span>{{ dish.name }}</span>
                    <span>{{ dish.price + "€" }}</span>

                    <button @click="addItemToCart(dish)">add</button>
                    <!-- <button @click="convertJson()" ></button> -->
                </li>
            </ul>
            <!-- <CartComp></CartComp> -->
        </div>
        <!-- <div v-for="item in cart" :key="item.id">
            <span>{{item.name}}</span>
            <span>{{item.price + "€" }}</span> -->
        <div v-for="dish in cart" :key="dish.id" class="row dish-container">
            <div class="col-3">
                <div class="dish-image">
                    <!-- image of the dish -->

                </div>
            </div>

            <div class="col-9 dish-information">
                <div class="dish-and-price">
                    <p class="text-orange">{{ dish.name }}</p>
                    <p class="ps-1 price text-nowrap">
                        € {{ (dish.price * dish.quantity).toFixed(2) }}
                    </p>
                </div>

                <div class="d-flex align-items-center cart-quantity-button">
                    <!-- bin icon -->
                    <a class="no-decoration" @click="removeAllFromCart(dish)"><i class="fa-solid fa-trash"></i></a>
                    <!-- add and remove item from cart  -->
                    <div class="pill-button">
                        <a @click="removeOneFromCart(dish)" class="no-decoration">-
                        </a>

                        <div class="display-num-pill-button">
                            {{ dish.quantity }}
                        </div>
                        <a @click="addItemToCart(dish)" class="no-decoration">+</a>
                    </div>
                </div>
            </div>
        </div>
        <TheFooter></TheFooter>
    </div>
    <!-- {{convertJson}} -->


</template>

<script>
// import CartComp from "../../frontend/components/CartComp.vue";
import axios from "axios";

import TheFooter from "../../frontend/components/TheFooter.vue";
import Navbar from "../../frontend/components/Navbar.vue";

// import map from "bluebird/js/release/map";
// import { find } from "laravel-mix/src/File";
// import { contains } from "micromatch";
export default {
    data() {

        return {
            cart: [],
            // cartClean: JSON.parse(localStorage.getItem('cart')),
            // itemsOnLocal: [],
            restaurant: {},


            client: {
                name: "",
                surname: "",
                email: "",
                phone: "",
                address: "",
                quantity: 1,
                partialTotal: 0,
                total: 0,
            }
        };
    },
    components: {
        TheFooter,
        Navbar
    },
    methods: {
        addItemToCart(dish) {
            if (
                localStorage.getItem("cart") != null &&
                this.cart[0].user_id != this.restaurant.id
            ) {
                // this.checkCart();
                this.addItemToCart().preventDefault();
            }
            if (localStorage.getItem("cart") == null) {
                localStorage.setItem("cart", JSON.stringify([]));
            }
            let cart = JSON.parse(localStorage.getItem("cart"));
            let index = cart.findIndex((item) => item.id == dish.id);
            if (index == -1) {
                dish.quantity = 1;
                cart.push(dish);
            } else {
                cart[index].quantity++;
            }
            localStorage.setItem("cart", JSON.stringify(cart));
            this.cart = JSON.parse(localStorage.getItem("cart"));
            this.partialTotal =
                this.cart.reduce(
                    (acc, dish) => acc + dish.price * dish.quantity);
            localStorage.setItem(
                "partialTotal",
                JSON.stringify(this.partialTotal),

            );
            this.total =
                this.partialTotal + this.restaurant.delivery_price;
            localStorage.setItem("total", JSON.stringify(this.total));
            // this.CartSectionShow();
        },
        // checkCart() {
        //     if (this.cart.length > 0) {
        //         if (this.cart[0].user_id != this.restaurant.id) {
        //             let modal = document.getElementById("modal-cart");
        //             modal.classList.replace("d-none", "d-flex");
        //         }
        //     }
        //     this.CartSectionShow();
        // },

        // removeOneFromCart(dish) {
        //     if (this.cart && this.cart.length > 0) {
        //         let cart = JSON.parse(localStorage.getItem("cart"));
        //         let index = cart.findIndex((item) => item.id == dish.id);
        //         if (index !== -1) {
        //             cart[index].quantity--;
        //             if (cart[index].quantity == 0) {
        //                 cart.splice(index, 1);
        //             }
        //         }
        //     }
        // },

        removeAllFromCart() {
            localStorage.removeItem("cart");
            localStorage.removeItem("partialTotal");
            localStorage.removeItem("total");
            this.cart = [];
            this.partialTotal = 0;
            this.total = 0;
            // this.closeModalCart();
        },

        //REMOVE
        removeOneFromCart(dish) {
            if (this.cart && this.cart.length > 0) {
                let cart = JSON.parse(localStorage.getItem("cart"));
                let index = cart.findIndex((item) => item.id == dish.id);
                if (index !== -1) {
                    cart[index].quantity--;
                    if (cart[index].quantity == 0) {
                        cart.splice(index, 1);
                    }
                }
                localStorage.setItem("cart", JSON.stringify(cart));
                this.cart = JSON.parse(localStorage.getItem("cart"));
                this.partialTotal = round(
                    this.cart.reduce(
                        (acc, dish) => acc + dish.price * dish.quantity,
                        0
                    ),
                    2
                );
                localStorage.setItem(
                    "partialTotal",
                    JSON.stringify(this.partialTotal)
                );
                this.total = round(
                    this.partialTotal + this.restaurant.delivery_price,
                    2
                );
                localStorage.setItem("total", JSON.stringify(this.total));
                if (this.cart.length == 0) {
                    window.location.reload();
                    return this.removeAllFromCart();
                }
                // localStorage.removeItem("cart");
                // localStorage.removeItem("partialTotal");
                // localStorage.removeItem("total");

                // this.partialTotal = 0;
                // this.total = 0;
                // this.cart = [];

            }
        }


    },
    mounted() {
        // return JSON.parse(localStorage.getItem('cart'))
        // console.log(this.$route);
        axios.get("api/users/" + this.$route.params.slug).then((resp) => {
            const data = resp.data;
            this.restaurant = data;
        });
        localStorage.removeItem('cart');
    }




}


    //         localStorage.setItem("cart", JSON.stringify(cart));
    //         this.cart = JSON.parse(localStorage.getItem("cart"));
    //         this.partialTotal = round(
    //             this.cart.reduce(
    //                 (acc, dish) => acc + dish.price * dish.quantity,
    //                 0
    //             ),
    //             2
    //         );
    //         localStorage.setItem(
    //             "partialTotal",
    //             JSON.stringify(this.partialTotal)
    //         );
    //         this.total = round(
    //             this.partialTotal + this.restaurant.delivery_price,
    //             2
    //         );
    //         localStorage.setItem("total", JSON.stringify(this.total));
    //         if (this.cart.length == 0) {
    //             localStorage.removeItem("cart");
    //             localStorage.removeItem("partialTotal");
    //             localStorage.removeItem("total");
    //             this.partialTotal = 0;
    //             this.total = 0;
    //         }
    //     }
    //     this.CartSectionShow();
    // },
    // removeAllFromCart(dish) {
    //     let cart = JSON.parse(localStorage.getItem("cart"));
    //     let index = cart.findIndex((item) => item.id == dish.id);
    //     if (index !== -1) {
    //         cart.splice(index, 1);
    //     }
    //     localStorage.setItem("cart", JSON.stringify(cart));
    //     this.cart = JSON.parse(localStorage.getItem("cart"));
    //     this.partialTotal = round(
    //         this.cart.reduce(
    //             (acc, dish) => acc + dish.price * dish.quantity,
    //             0
    //         ),
    //         2
    //     );
    //     localStorage.setItem(
    //         "partialTotal",
    //         JSON.stringify(this.partialTotal)
    //     );
    //     this.total = round(
    //         this.partialTotal + this.restaurant.delivery_price,
    //         2
    //     );
    //     localStorage.setItem("total", JSON.stringify(this.total));
    //     if (this.cart.length == 0) {
    //         localStorage.removeItem("cart");
    //         localStorage.removeItem("partialTotal");
    //         localStorage.removeItem("total");
    //         this.partialTotal = 0;
    //         this.total = 0;
    //     }
    //     this.CartSectionShow();
    // },

</script>
<style  lang="scss" scoped>
.dish-img {
    aspect-ratio: 1/1;
    width: 100px;
}
</style>
