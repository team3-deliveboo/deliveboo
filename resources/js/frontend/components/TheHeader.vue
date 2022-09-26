<template>

    <div class="header">

            <div class="left"></div>

            <div class="right"></div>

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
    height: 400px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    text-align: center;
    
    .left {
        background-image: url('/img/grocery_bag.webp');
        background-size: cover;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 40%;
    }

    .right {
        background-image: url('/img/burger.webp');
        background-size: cover;
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 40%;
        aspect-ratio: 1/1;
    }
}

</style>