<template>
    <div class="container-series">
        <h1>Fill in the folloiwing form to add a new TV series</h1>
        <form>
            <label for="title">Titolo</label><br>
            <input type="text" name="title" v-model="title"><br>
            <label for="author">Autore</label><br>
            <input type="text" name="author" v-model="author"><br>
            <label for="release_date">Data di rilascio</label><br>
            <input type="date" name="release_date" v-model="releaseDate"><br>
            <label for="rating">Rating</label>
            <input type="number" min="1" max="5" name="rating" v-model="rating">
            <input type="button" value="Submit" @click="sendDataToStore()">
        </form>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                title: '',
                author: '',
                releaseDate: '',
                rating: ''
            }
        },
        methods: {
            sendDataToStore: async function() {

                let data = {
                    title: this.title,
                    author: this.author,
                    release_date: this.releaseDate,
                    rating: this.rating
                }
                try {

                    let response = await fetch('http://localhost:8000/api/tvseries/store', {
                        method: 'POST',
                        headers: {
                        'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                    });

                    if (response.ok) {
                        this.$router.push({ name: 'tvseries' });
                    }

                } catch(err) {
                    console.log(err);
                }

            }
        }
    }
</script>