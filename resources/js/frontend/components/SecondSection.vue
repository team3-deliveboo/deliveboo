<template>
    <div class="container py-5">

        <div class="wrapper">
                <div class="row row-cols-2 row-xl">
                    <div class="col-12 col-xl-5">
                        <div class="text">
                            <div class="title">Segui gli ordini passo passo</div>
                            <div class="subtitle">I piatti e i prodotti che ami, consegnati in pochissimo tempo. Vedrai quando il rider ha ritirato l'ordine, che potrai seguire passo passo, e riceverai una notifica quando sarà quasi da te.</div>
                            <div class="badges">
                                <a href="javascript:void(0)"><div class="badge-store apple"></div></a>
                                <a href="javascript:void(0)"><div class="badge-store google"></div></a>
                            </div>
                        </div>
                    </div>

                    <!-- ORDER TRACKING IMAGE -->
                    <div class="col-12 col-xl-7">
                        <div class="map-img d-none d-sm-block">
                            <div class="over-img d-none d-sm-block">
                                <img src="img/notification.webp" alt="Immagine Aggiornamento Consegna">
                            </div>
                        </div>
                    </div>

                </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'SecondSection'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

.container {

    .wrapper {
        font-family: 'IBM Plex Sans Arabic', sans-serif;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 20px 0px lightgray;
        // position: relative;

        .text {
            width: 90%;
            padding: 2rem;

            .title {
                font-size: 2.5rem;
                font-weight: bold;
                line-height: 50px;
                padding-bottom: 1rem;
            }

            .subtitle {
                font-size: 1.2rem;
            }

            .badges {
                display: flex;
                gap: 5px;
                padding-top: 3rem;
                padding-bottom: 2rem;

                .badge-store {
                    height: 40px;
                    width: 130px;
                    margin-bottom: 1rem;
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    border: 1px solid grey;
                    border-radius: 6px;
                        
                    &.apple {
                        background-image: url('/img/apple_store.png');
                    }

                    &.google {
                        background-image: url('/img/google_play.png');
                    }
                }
            }
        }

        .map-img {
            background-image: url('/img/map.png');
            background-size: cover;
            background-position: left;
            background-repeat: no-repeat;
            height: 100%;
            border-radius: 0px 10px 10px 0px;
            position: relative;
        }

        .over-img {
            position: absolute;
            top: 10px;
            right: 0;
            width: 40%;

            & img {
                width: 100%;
            }
        }

        @media screen and (max-width: 1024px) {
            .map-img {
                height: 400px;
                position: relative;
                border-radius: 0px 0px 10px 10px;
            }

            .over-img {
                position: absolute;
                top: 0px;
                right: 50%;
                transform: translate(50%, 0%);
                width: 50%;
            }
        }
    }
}
</style>