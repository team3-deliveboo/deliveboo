<template>
    <div class="container py-5">

        <div class="row">
            <div class="col-12">
                <div class="card-restaurant">
                    <div class="restaurant-img"></div>
                    <div class="restaurant-label">
                        <h6>Nome Ristorante</h6>
                    </div>
                </div>
            </div>


            <div class="col-12"></div>
            <div class="col-12"></div>
            <div class="col-12"></div>
            <div class="col-12"></div>
            <div class="col-12"></div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'FirstSection'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

.card-restaurant {
    height: 150px;
    width: 150px;
    border-radius: 10px;
    text-align: center;
    font-family: 'IBM Plex Sans Arabic', sans-serif;
    
    .restaurant-img {
        background-image: url('/img/logo_35.png');
        background-size: cover;
        background-position: center;
        height: 100%;
        border-radius: 139px 187px 160px 195px;
    }

    .restaurant-label {
        color: $deliveroo-dark;
    }
}
</style>