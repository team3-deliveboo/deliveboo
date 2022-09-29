<template>
    <div class="cart">

        <!-- VUE NAVBAR -->
        <Navbar></Navbar>
        <div class="border-bottom"></div>
        <div class="lower-section">


            <!-- HEADER WITH RESTAURANT NAME -->
            <div class="restaurant-section">
                <div class="container d-flex align-items-center gap-4">
                    <div class="image">
                        <img :src="'/storage/' + restaurant.img" :alt="'Immagine di' + ' ' + restaurant.name">
                    </div>

                    <div class="text-section">
                        <h1>{{ restaurant.name }}</h1>
                        <!-- <small>{{ restaurant.categories }}</small> -->
                        <div class="pt-3 text-muted">{{ restaurant.address }} · {{ restaurant.phone }}</div>
                    </div>
                </div>
            </div>


            <!-- DISH + CART -->
            <div class="container">
                <div class="row w-100">

                    <!-- DISHES LIST -->
                    <div class="col-8">
                        <div class="dishes-section">

                            <h4 class="fw-bold pb-0 mb-0">Menù</h4>
                            <div class="pb-3 text-muted">Scegli il tuo piatto, ed aggiungilo al carrello.</div>

                            <!-- SINGLE DISH CARD -->
                            <div class="row row-cols-2 g-3 w-100">
                                <div class="col" v-for="dish in restaurant.dishes" :key="dish.id">
                                        <button @click="addItemToCart(dish)">
                                            <div class="dish-card">
                                                <div class="text-start pe-1">
                                                    <div><b>{{ dish.name }}</b></div>
                                                    <div class="description">{{ dish.description }}</div>
                                                    <div>{{ dish.price + "€" }}</div>
                                                </div>
                                                <div class="dish-img">
                                                    <img :src="'/storage/' + dish.img" :alt="'Immagine del piatto' + ' ' + dish.name" />
                                                </div>
                                            </div>
                                        </button>
                                        <!-- <button @click="addItemToCart(dish)">add</button> -->
                                    <!-- <button @click="convertJson()" ></button> -->
                                </div>
                            </div>
                            <!-- <CartComp></CartComp> -->
                        </div>
                    </div>

                <!-- <div v-for="item in cart" :key="item.id">
                    <span>{{item.name}}</span>
                    <span>{{item.price + "€" }}</span> -->


                    <!-- CART SECTION -->
                    <div class="col-4">
                        <div class="py-4 h-100">
                            <div class="cart-section">

                                <div v-if="cart.length <= 0" class="empty-cart">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <div class="empty">Il carrello è vuoto</div>
                                </div>

                                <template v-if="cart.length > 0">
                                    <h5 class="pb-3 fw-bold">Il tuo ordine</h5>
                                </template>

                                <div v-for="dish in cart" :key="dish.id" class="row">

                                    <!-- SELECTED DISH -->
                                    <div class="col-3">
                                        <p>{{ dish.name }}</p>
                                    </div>

                                    <!-- QUANTITY BUTTONS -->
                                    <div class="col-3">
                                        <div class="d-flex align-items-center cart-quantity-button">
                                            <div class="pill-button">
                                                <a @click="removeOneFromCart(dish)" class="no-decoration">
                                                    <i class="fa-regular fa-square-minus"></i>
                                                </a>
                                            </div>

                                            <div class="display-num-pill-button">
                                                {{ dish.quantity }}
                                            </div>

                                            <div>
                                                <a @click="addItemToCart(dish)" class="no-decoration">
                                                    <i class="fa-regular fa-square-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- PRICE-->
                                    <div class="col-3">
                                        <p class="ps-1 price text-nowrap">{{ (dish.price * dish.quantity).toFixed(2) }} €</p>
                                    </div>

                                    <!-- TRASHCAN -->
                                    <div class="col-3">
                                        <a class="no-decoration" @click="removeAllFromCart(dish)"><i class="fa-solid fa-trash"></i></a>
                                    </div>

                                </div>

                                <!-- PAYMENT BUTTON -->
                                <div class="payment-section d-flex justify-content-center">
                                    <button class="grey-btn position-absolute" style="bottom: 20px; width: 90%;">
                                        <b>Vai al pagamento</b>
                                    </button>

                                    <template v-if="cart.length > 0">
                                        <button class="blue-btn position-absolute" style="bottom: 20px; width: 90%;">
                                            <b>Vai al pagamento</b>
                                        </button>
                                    </template>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- VUE COMPONENT: FOOTER -->
        <TheFooter></TheFooter>
    </div>

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
    components: { TheFooter, Navbar },
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

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';
.cart {
    font-family: 'IBM Plex Sans Arabic', sans-serif;
    background-color: white;

    .lower-section {
        background-color: $deliveroo-grey;

        .restaurant-section {
            background-color: white;
            width: 100%;
            padding: 2rem 0;
            border-bottom: 1px solid lightgray;
            box-shadow: 0 4px 5px -2px rgb(224, 224, 224);

            img {
                height: 250px;
                border-radius: 5px;
                border: 1px solid lightgray;
                aspect-ratio: 1/1;
            }

            h1 {
                text-transform: uppercase;
                font-weight: bold;
                background-color: $deliveroo-blue;
                height: 20px;
            }
        }

        .dishes-section {
            padding: 2rem 0;
            overflow-y: auto;
            width: 100%;

            button {
                width: 100%;
                border: none;
                border-radius: 5px;
                background-color: transparent;

            .dish-card {
                width: 100%;
                background-color: white;
                border: 1px solid white;
                border-radius: 5px;
                padding: 1rem;
                display: flex;
                justify-content: space-between;
                box-shadow: 0 0 4px rgb(224, 224, 224);

                .dish-img img {
                    width: 100px;
                    aspect-ratio: 1/1;
                    border-radius: 5px;
                    border: 1px solid $deliveroo-grey;
                }

                .description {
                    font-size: .85rem;
                    line-height: 130%;
                    opacity: 75%;
                    padding: .5rem 0 .7rem 0;
                    text-overflow: ellipsis;
                }
            }
        }
    }

        .cart-section {
            height: 500px;
            width: 100%;
            background-color: white;
            border: 1px solid white;
            padding: 2rem 2rem 4rem 2rem;
            overflow-y: auto;
            box-shadow: 0 0 4px rgb(224, 224, 224);
            position: relative;
            
            .empty-cart {
                display: flex;
                align-items: center;
                flex-direction: column;
                gap: 1rem;

                & i {
                    color: #abadad;
                    font-size: 50px;
                }

                .empty {
                    color: #abadad;
                }
            }

            a i {
                color: $deliveroo-blue;
                margin: 0 .5rem;
                cursor: pointer;
            }

            .payment-section {
                height: 150px;
                width: 100%;
                background-color: white;
                box-shadow: 0 -5px 5px -2px rgb(224, 224, 224);
                position: absolute;
                bottom: 0;
                left: 0;
            }
        }
    }
}
</style>