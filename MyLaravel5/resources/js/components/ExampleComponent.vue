<template>
    <div class="container-series">
        <div v-for="(singleTvSeries, i) in tvSeries"  class="item">
            <div>Title: {{ singleTvSeries.title }}</div>
            <div>Author: {{ singleTvSeries.author }}</div>
            <button class="edit-btn">Edit</button>
            <button class="delete-btn" @click="deleteRecord(singleTvSeries.id)">Delete</button>
            <button class="details-btn" @click="showMoreDetails(singleTvSeries.id)">More Details</button>
        </div>
        <button class="add-btn">Add new TV Series</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tvSeries: ''
            }
        },
        mounted() {
            console.log('Component mounted.');
            this.callToHome();
        },
        methods: {
            callToHome: async function() {
                try {

                    let response = await fetch('http://localhost:8000/api/tvseries');
                    let responseToJson = await response.json();
                    this.tvSeries = responseToJson.data;
                    
                } catch(err) {
                    console.log(err)
                }
            },
            deleteRecord: async function(id) {
                try {

                    let response = await fetch('http://localhost:8000/api/tvseries/delete/' + id);
                    let responseToJson = await response.json();
                    this.tvSeries = responseToJson.data;

                } catch(err) {
                    console.log(err);
                }
            },
            showMoreDetails(seriesId) {
                window.location.href = window.location.href + '/' + seriesId;
                this.$router.push({ name: 'show', params: { id: seriesId } });
                this.$router.push({ name: 'tvseries'});
            }
        },
    }
</script>
