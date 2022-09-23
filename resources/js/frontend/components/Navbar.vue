<template>
    <div>
        <nav>
            <router-link to="/">Home</router-link>
            <router-link to="/restaurant">Ristorante</router-link>

            <div id="app" class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        Deliveboo
                    </div>
                    <div class="links"></div>
                </div>

            </div>
        </nav>
    </div>

</template>

<script>
export default {
    name: 'Navbar'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';

nav {
    background-color: $deliveroo-blue;
    height: 60px;
}
</style>