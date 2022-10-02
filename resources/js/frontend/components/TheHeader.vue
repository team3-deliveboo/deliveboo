<template>
    <div class="header">

        <!-- BACKGROUND IMG -->
        <div class="img-wrapper justify-content-sm-center">
            <img class="left-img d-none d-lg-block" src="img/deliveboo_grocery.png" alt="Immagine Spesa">
            <img class="right-img" src="img/burger.webp" alt="Immagine Burger">
        </div>

        <!-- TEXT AND SEARCH BAR -->
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="text-wrapper px-4 px-md-0">
                    <div class="title ">
                        <h1 class="fw-bold">I piatti dei ristoranti stellati e di lusso che ami, a domicilio</h1>
                    </div>
                    <div class="subtitle">Inserisci quello che vorresti mangiare per visualizzare i ristoranti</div>

                    <div class="search-bar d-none d-md-flex">
                        <button class="fork">
                            <i class="fa-solid fa-utensils"></i>
                        </button>
                        <input type="text" class="form-control" placeholder="Italiano? Vegano? Stellato?">
                        <button class="search-btn" type="button" id="button-addon1">Cerca</button>
                    </div>
                </div>
            </div>
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
        z-index: 0;

        img {
            height: 100%;

            &.left-img {
                left: 0;
            }

            &.right-img {
                right: 0;
            }
        }
    }

    .row {
        z-index: 3;
    }

    .text-wrapper {
        display: block;
        z-index: 3;
        color: white;

        .subtitle {
            padding: 2rem 0 1rem 0;
        }

        .search-bar {
            display: flex;
            position: relative;
            align-items: center;

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

            .form-control:focus {
                color: #212529;
                background-color: #fff;
                border-color: transparent;
                outline: 0;
                box-shadow: 0 0 0 2px black, 0 0 0 4px white;
            }
        }
    }
}
</style>