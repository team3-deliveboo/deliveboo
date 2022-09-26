<template>
    <div class="all-body">

        <TheJumbotron></TheJumbotron>
        <TheMain></TheMain>
        <TheFooter></TheFooter>

    </div>
</template>

<script>
import TheJumbotron from './frontend/components/TheJumbotron.vue';
import TheMain from './frontend/components/TheMain.vue';
import TheFooter from './frontend/components/TheFooter.vue'

export default {
    components: { TheJumbotron, TheMain, TheFooter },
};
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import '~/resources/sass/frontend/frontend.scss';

.all-body {
    background-color: $deliveroo-grey;
}
</style>
