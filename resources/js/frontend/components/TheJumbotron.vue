<template>
    <div class="jumbotron">

        <Navbar></Navbar>
        <TheHeader></TheHeader>

    </div>
</template>

<script>
import Navbar from './Navbar.vue'
import TheHeader from './TheHeader.vue';

export default {
    name: 'TheJumbotron',
    components: { Navbar, TheHeader }
}
</script>

<style lang="scss" scoped>
.jumbotron {
    background-color: black;
    height: 500px;
    width: 100%;
    overflow: hidden;
}
</style>