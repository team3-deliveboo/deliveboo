<template>
    <div class="third-section">

        <div class="stars">
            <img src="img/stelle1.svg" alt="Stelline1">
            <img src="img/stelle2.svg" alt="Stelline2">
        </div>

        <div class="text">
            <div class="title">14 giorni di consegne gratis per nuovi clienti</div>
            <div class="subtitle">Prova Deliveboo e fatti consegnare dove vuoi la spesa e i piatti che ami dai ristoranti stellati della tua zona!</div>
            <div class="sub-subtitle">Offerta valida solo per nuovi clienti. Escluse spese di servizio. <a>Termini e condizioni qui.</a></div>
        </div>

        <div class="banner">
            <img src="img/banner_patatine.svg" alt="Banner Patatine">
        </div>

    </div>
</template>

<script>
export default {
    name: 'ThirdSection'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

.third-section {
    padding: 3rem 0 9rem 0;
    background: rgb(0,126,137);
    background: linear-gradient(125deg, rgba(0,126,137,1) 0%, rgba(34,194,183,1) 100%);
    display: flex;
    justify-content: center;
    text-align: center;
    position: relative;

    .stars {
        width: 60%;
        display: flex;
        justify-content: space-between;
        position: absolute;
    }

    .text {
        font-family: 'IBM Plex Sans Arabic', sans-serif;
        width: 50%;
        color: white;

        .title {
            font-size: 3.7rem;
            line-height: 80px;
            font-weight: bold;
        }
        
        .subtitle {
            font-size: 1.4rem;
            padding-top: 2rem;
        }

        .sub-subtitle {
            font-size: .85rem;
            padding-top: 1rem;

            a {
                color: white;
                text-decoration: underline;
            }
        }
    }

    .banner {
        position: absolute;
        bottom: 0;
    }
}
</style>