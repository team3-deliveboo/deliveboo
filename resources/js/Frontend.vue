<template>
    <div>

        <TheJumbotron></TheJumbotron>
        <router-view></router-view>

    </div>
</template>

<script>
    
import TheJumbotron from './frontend/components/TheJumbotron.vue';

export default {
    components: { TheJumbotron },
};

</script>

<style lang="scss" scoped>

@import '~/resources/sass/backend/_variables.scss';
@import '~/resources/sass/frontend/frontend.scss';


</style>
