<template>
    <div class="header">

        <!-- TEXT AND CATEGORIES FILTER INPUT -->
        <div class="text-wrapper">
            <div class="title">
                <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            </div>
            <div class="subtitle">Inserisci quello che vorresti mangiare per visualizzare i ristoranti</div>

            <div class="search-bar">
                <button class="fork">
                    <i class="fa-solid fa-utensils"></i>
                </button>
                <input type="text" class="form-control" placeholder="Italiano? Francese? Stellato?">
                <button class="search-btn" type="button" id="button-addon1">Cerca</button>
            </div>
            
        </div>

        <!-- BACKGROUND IMG -->
        <div class="img-wrapper">
            <img class="left-img" src="img/grocery_bag.webp" alt="Immagine Spesa">
            <img class="right-img" src="img/burger.webp" alt="Immagine Burger">
        </div>
        
    </div>
</template>

<script>
export default {
    name: 'TheHeader'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

.header {
    background-color: black;
    width: 100%;
    height: calc(100% - 70px);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    text-align: center;
    position: relative;

        .img-wrapper {
            height: 100%;
            width: 100%;
            position: absolute;
            display: flex;
            justify-content: space-between;

            img {
                //width: 40%;
                height: 100%;

                &.left-img {
                    left: 0;
                }

                &.right-img {
                    right: 0;
                }
            }
        }
    
        .text-wrapper {
            width: 40%;
            z-index: 2;
            color: white;

            .subtitle {
                padding: 2rem 0 1rem 0;
            }

            .search-bar {
                display: flex;
                position: relative;

                input {
                    padding: 1.2rem;
                    border-radius: 50px;
                    width: 100%;

                    &::placeholder {
                        color: lighten($color: gray, $amount: 20);
                        padding-left: 25px
                    }
                }

                button.fork {
                    color: $deliveroo-blue;
                    position: absolute;
                    border: none;
                    border-radius: 100%;
                    background-color: transparent;
                    width: 20px;
                    left: 15px;
                    top: 0;
                    bottom: 0;
                }

                .search-btn {
                    position: absolute;
                    right: 0;
                    top: 0;
                    bottom: 0;
                }
            }
        }
    }

</style>