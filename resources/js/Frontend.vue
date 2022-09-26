<template>
    <div>
        <Navbar></Navbar>
        <TheHeader></TheHeader>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from './frontend/components/Navbar.vue';
import TheHeader from './frontend/components/TheHeader.vue';

export default {
    components: { Navbar, TheHeader},
};

</script>

<style lang="scss" scoped>
    @import '~/resources/sass/backend/_variables.scss';
    @import '~/resources/sass/frontend/frontend.scss';
</style>
