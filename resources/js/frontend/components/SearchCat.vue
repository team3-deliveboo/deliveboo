<template>
    <div class="text-white">
        <select v-model="selectedGenre" @change="$emit('filterGenre', selectedGenre)" class="form-select">
            <option value="0">{{ selectedGenre === '0' ? 'Search by genre' : 'All genres' }}</option>
            <option v-for="(genre, i) in genreList" :key="i" :value="genre">{{ genre }}</option>
        </select>
    </div>
</template>

<script>
export default {
    name: 'SearchByGenre',
    props: {
        genreList: Array
    },
    data() {
        return {
            selectedGenre: '0'
        }
    }
}

</script>

<style lang="scss" scoped>
</style>