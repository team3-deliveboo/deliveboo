<template>

    <div class="header">

        <!-- TEXT AND CATEGORIES FILTER INPUT -->
        <div class="text-wrapper">
            <div class="title">
                <h1>I piatti dei ristoranti che ami e la spesa, a domicilio</h1>
            </div>
            <div class="subtitle">Inserisci quello che vorresti mangiare per visualizzare i ristoranti</div>

                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                        <i class="fa-solid fa-utensils"></i>
                    </button>

                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
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

            button .fa-solid {
                color: $deliveroo-blue;
            }
        }
}

</style>