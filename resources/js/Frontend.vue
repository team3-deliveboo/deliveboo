<template>
    <div>
        <Navbar></Navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./frontend/components/Navbar.vue";

export default {
    components: { Navbar, },
};
</script>

<style lang="scss" scoped>
    @import '~/resources/sass/backend/_variables.scss';
    @import '~/resources/sass/frontend/frontend.scss';
</style>
