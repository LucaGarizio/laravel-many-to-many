<script>
import axios from "axios";
export default {
    name: "ApiComponent",
    data() {
        return {
            technologies: [],
        };
    },
    mounted() {
        axios
            .get("http://localhost:8000/api/v1/technologies")
            .then((res) => {
                const data = res.data.technologies;
                console.log(res.data.technologies);

                this.technologies = res.data.technologies;
            })
            .catch((error) => {
                console.log(error);
            });
    },
};
</script>

<template>
    <h1>technologies</h1>

    <div v-for="technology in technologies" :key="technology.id">
        <h2>
            Tech ID: {{ technology.id }} <br />
            Tech Name: {{ technology.name }}
        </h2>
        <h3>Tech Description: {{ technology.description }}</h3>
        <hr />
    </div>
</template>

<style scoped></style>
