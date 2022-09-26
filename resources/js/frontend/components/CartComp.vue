<template>
    <section class="cart-comp container fluid-container">
        <div class="cart-container">
            <div class="top-links">
                <h4 class="static active">Carrello <i class="fa-solid fa-cart-arrow-down"></i></h4>
                <h4 v-if="total > 0">
                    <router-link :to="{name: 'checkout'}" class="link">Checkout <i class="fa-regular fa-credit-card"></i></router-link>
                </h4>
            </div>
            <div class="mid-bar">
                <go-back-btn/>
            </div>
            <div
                v-if="total > 0"
                class="cart-container-content row">
                <ul class="products-container col-sm-7 col-12">
                    <li
                        v-for="(item, index) in items"
                        :key="index">
                        <img
                            v-if="item.image"
                            :src="`/images/foods/${item.image}`"
                            :alt="item.name">
                        <img
                            v-else
                            src="/images/foods/dishFoodPlaceholder.jpg"
                            :alt="`item.name`">
                        <div class="right-side row">
                            <div class="info col-lg-8 col-12">
                                <h5>{{item.name}}</h5>
                                <p class="description">
                                    <span>{{item.description}}</span>
                                </p>
                                <span class="price">&euro; {{item.price}}</span>
                            </div>
                            <div class="quantity-inputs col-lg-4 col-12">
                                <i  @click="removeItem(item , index)"
                                    class="qt-btn fa-solid fa-square-minus"></i>
                                <div class="quantity">{{item.quantity}}</div>
                                <i  @click="addItem(item)"
                                    class="qt-btn fa-solid fa-square-plus"></i>
                                <i  @click="deleteItem(index)"
                                    class="del-btn fa-solid fa-trash-can"></i>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="checkout col-sm-5 col-12">
                    <div class="ckt-container">
                        <h2>Totale: <span class="price">€ {{total}}</span></h2>
                        <router-link :to="{name: 'checkout'}">
                            <button class="btn btn-danger w-100 my-3"><i class="fa-solid fa-credit-card"></i> Vai al Checkout</button>
                        </router-link>
                    </div>
                </div>
            </div>
            <h1 v-else><i class="fa-solid fa-triangle-exclamation"></i> Il carrello è vuoto.</h1>
        </div>
    </section>
</template>

<script>
import GoBackBtn from '../partials/GoBackBtn.vue';
export default {
    components: { GoBackBtn },
    name: 'CartComp',
    data() {
        return{
            items:null,
            total: 0,
            loaded: false,
            paidFor: false,
        }
    },
    created() {
        if (localStorage.cart) {
            this.items = JSON.parse(localStorage.cart);
        }
        this.itemTotals();
    },
    methods: {
        addItem(item) {
            for(let i = 0; i < this.items.length; i++){
                console.log(this.items[i]);
                if(this.items[i].id == item.id){
                    this.items[i].quantity = this.items[i].quantity + 1;
                    this.saveCart();
                    this.itemTotals();
                }
            }
        },
        removeItem(item , index){
            if(item.quantity > 1)
            for(let i = 0; i < this.items.length; i++){
                if(this.items[i].id == item.id){
                    this.items[i].quantity = this.items[i].quantity - 1;
                    this.saveCart();
                    this.itemTotals();
                }
            }
            else
                this.deleteItem(index);
            this.itemTotals();
        },
        deleteItem(index) {
            this.items.splice(index, 1);
            console.log(index);
            this.saveCart();
            this.itemTotals();
        },
        saveCart(){
            const parsed = JSON.stringify(this.items);
            localStorage.setItem('cart', parsed);
            this.items = JSON.parse(localStorage.cart);
        },
        itemTotals(){
            this.total = 0;
            for (let index = 0; index < this.items.length; index++) {
                this.total += parseFloat(this.items[index].price)*this.items[index].quantity;
            }
        },

    }
}
</script>

<style lang="scss" scoped>
.cart-comp{
    .cart-container{
        width: 100%;
        margin: 50px 0;
        min-height: calc(100vh - 590px);
        background-color: white;
        color: black;
        box-shadow: 0px 0px 15px rgb(189, 189, 189);
        border-radius: 20px;
        overflow: hidden;
        .top-links{
            display: flex;
            width: 100%;
            height: 50px;
            color: #dd3546;
            h4{
                width: 50%;
                text-align: center;
                margin: 0 auto;
                &.active,
                .active{
                    border-bottom: 3px solid #dd3546;
                    font-weight: bolder;
                }
                &.static,
                .link{
                    padding-top: 10px;
                }
                .link{
                    cursor: pointer;
                    display: block;
                    width: 100%;
                    height: 100%;
                    color: #dd3546;
                    text-decoration: none;
                    transition: .2s all;
                    &:hover{
                        background-color: rgb(240, 240, 240);
                    }
                }
            }
        }
        .mid-bar{
            width: 100%;
            padding: 15px 15px 0;
        }
        .cart-container-content{
            .products-container{
                margin: 0;
                list-style: none;
                li{
                    display: flex;
                    align-items: center;
                    margin: 30px 15px 0 15px;
                    padding-bottom: 15px;
                    border-bottom: 2px solid lightgray;
                    img{
                        width: 100px;
                        border-radius: 10px;
                        margin-right: 15px;
                    }
                    .right-side{
                        display: flex;
                        flex-grow: 1;
                        align-items: center;
                        .info{
                            margin: 10px 0;
                            h5{
                                font-weight: bolder;
                            }
                            .description{
                                display: table;
                                table-layout: fixed;
                                max-width: 250px;
                                width: 100%;
                                font-size: 14px;
                                color: gray;
                                white-space: nowrap;
                            }
                            .description > *{
                                display: table-cell;
                                overflow: hidden;
                                text-overflow: ellipsis;
                            }
                            .price{
                                font-weight: bold;
                                color: #4E54C8;
                            }
                        }
                        .quantity-inputs{
                            display: flex;
                            align-items: center;
                            .qt-btn,
                            .del-btn{
                                cursor: pointer;
                            }
                            .qt-btn{
                                font-size: 20px;
                                color: gray;
                                transition: .2s all;
                                &:hover{
                                    color: rgb(95, 95, 95);
                                }
                                &:active{
                                    color: #dd3546;
                                }
                            }
                            .quantity{
                                margin: 0 8px;
                                font-weight: bold;
                                color: #dd3546;
                            }
                            .del-btn{
                                margin-left: 30px;
                                color: red;
                                transition: .2s all;
                                &:hover{
                                    color: darkred;
                                }
                                &:active{
                                    color: black;
                                }
                            }
                        }
                    }
                    &:last-of-type{
                        border-bottom: none;
                    }
                }
            }
            .checkout .ckt-container{
                text-align: center;
                padding-top: 60px;
                margin: 0 auto;
                width: 50%;
                h2{
                    font-weight: bolder;
                    .price{
                        display: inline-block;
                        font-weight: bold;
                        color: #4E54C8;
                    }
                }
                button{
                    font-weight: bold;
                    i{
                        margin-right: 5px;
                    }
                }
            }
        }
        h1{
            text-align: center;
            font-weight: bolder;
            margin: 70px 0;
            i{
                color: #dd3546;
            }
        }
    }
}
</style>