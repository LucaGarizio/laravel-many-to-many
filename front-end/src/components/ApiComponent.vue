<script>
import axios from "axios";
export default {
    name: "ApiComponent",

    mounted() {
        axios
            .get("http://localhost:8000/api/v1/technology")
            .then((res) => {
                const data = res.data;
                console.log(data);
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<template>
    <h1>ciao</h1>
</template>

<style scoped></style>
