<template>
    <div class="container-series">
        <div v-if="singleTvSeries">
            <h2>Title: {{ singleTvSeries.title }}</h2>
            <h3>Author: {{ singleTvSeries.author }}</h3>
            <h4>Rating: {{ singleTvSeries.rating }}</h4>
            <h4>Release Date: {{ singleTvSeries.release_date }}</h4>
        </div>
        <div v-else>
            Loading...
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                singleTvSeries: ''
            }
        },
        created() {
            this.getSeriesDetails(this.$route.params.id);
        },
        methods: {
            getSeriesDetails: async function(id) {
                try {

                    let response = await fetch('http://localhost:8000/api/tvseries/' + id);

                    let responseToJson = await response.json();

                    this.singleTvSeries = responseToJson.data;

                } catch(err) {
                    console.log(err);
                }
            }
        },
    }
</script>
