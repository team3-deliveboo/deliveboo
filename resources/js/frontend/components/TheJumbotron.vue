<template>
    <div>

        <Navbar></Navbar>
        <TheHeader></TheHeader>

    </div>
</template>

<script>
import NavBar from './Navbar.vue'
import TheHeader from './TheHeader.vue';

export default {
    name: 'TheJumbotron',
    components: { NavBar, TheHeader }
}

</script>

<style lang="scss" scoped>

</style>