<template>
    <div class="container-series">
        <h1>Fill in the folloiwing form to add a new TV series</h1>
        <form action="http://localhost:8000/api/tvseries/store" method="POST">
        <label for="title">Titolo</label><br>
        <input type="text" name="title"><br>
        <label for="author">Autore</label><br>
        <input type="text" name="author"><br>
        <label for="release_date">Data di rilascio</label><br>
        <input type="date" name="release_date"><br>
        <label for="rating">Rating</label>
        <input type="number" min="1" max="5" name="rating">
        <input type="submit" value="Submit">
    </form>
    </div>

</template>

<script>
    export default {

    }
</script>