<template>
    <span class="stars">
        <i class="fas fa-star" v-for="n in stars" :key="n"></i>
        <i class="fas fa-star-half" v-if="halfstar"></i>
    </span>
</template>

<script>
 export default {
     name: 'stars',
     props: ['rating'],
     computed: {
        stars: function() {
            const rating = Number(this.rating);

            return Math.floor(rating);
        },
        halfstar: function() {
            const rating = Number(this.rating);

            return rating - Math.floor(rating) > 0;
        }
     }
 }
</script>