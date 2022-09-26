<template>
    <div class="container py-5">

        <div class="row">
            <div class="col-12">
                <div class="card-restaurant">
                    <div class="restaurant-img"></div>
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
    height: 100%;
    width: 100%;
    
    .restaurant-img {
        background-image: url('');
        background-size: cover;
    }
}

</style>