export async function getSeriesDetails(id) {
    try {

        let response = await fetch('http://localhost:8000/api/tvseries/' + id);

        let responseToJson = await response.json();

        // this.singleTvSeries = responseToJson.data;

        console.log(responseToJson);

        return responseToJson.data;

    } catch(err) {
        console.log(err);
    }
}