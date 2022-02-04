<template>
    <div class="container-series">
        <router-link :to="{ name: 'tvseries' }">Show All TV Series Available</router-link>
        <router-view></router-view>
    </div>

</template>

<script>
    export default {
        // data() {
        //     return {
        //         singleTvSeries: ''
        //     }
        // },
        // created() {
        //     this.getSeriesDetails(this.$route.params.id);
        // },
        // methods: {
        //     getSeriesDetails: async function(id) {
        //         try {

        //             let response = await fetch('http://localhost:8000/api/tvseries/' + id);

        //             let responseToJson = await response.json();

        //             this.singleTvSeries = responseToJson.data;

        //         } catch(err) {
        //             console.log(err);
        //         }
        //     }
        // },
    }
</script>
