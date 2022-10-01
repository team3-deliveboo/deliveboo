<template>
    <div>
        <main>
            <!-- <router-view></router-view> -->

            <FirstSection></FirstSection>
            <SecondSection></SecondSection>
            <ThirdSection></ThirdSection>
            <FourthSection></FourthSection>

        </main>
    </div>
</template>

<script>
import FirstSection from './FirstSection.vue';
import SecondSection from './SecondSection.vue';
import ThirdSection from './ThirdSection.vue';
import FourthSection from './FourthSection.vue';

export default {
    name: 'TheMain',
    components: { FirstSection, SecondSection, ThirdSection, FourthSection }
}
</script>