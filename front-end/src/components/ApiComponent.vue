<script>
import axios from "axios";
export default {
    name: "ApiComponent",
    data() {
        return {
            technologies: [],
            visibility: false,

            newTechnology: {
                name: "",
                description: "",
            },
        };
    },
    methods: {
        showForm() {
            this.visibility = true;
        },

        createNewTechnology() {
            axios
                .post(
                    "http://localhost:8000/api/v1/technologies",
                    this.newTechnology
                )
                .then((res) => {
                    const data = res.data;
                    console.log(res.data);
                    if (data === "success") {
                        this.technologies.push(data.technology);
                        this.visibility = false;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    mounted() {
        axios
            .get("http://localhost:8000/api/v1/technologies")
            .then((res) => {
                const data = res.data.technologies;
                console.log(res.data.technologies);

                this.technologies = res.data.technologies;
            })
            .catch((err) => {
                console.log(err);
            });
    },
};
</script>

<template>
    <h1>Technologies</h1>
    <button @click="showForm">Crea nuova tech</button>
    <br />
    <br />
    <div v-if="visibility">
        <form @submit.prevent="createNewTechnology" method="" action="">
            <label for="name">Nome</label>
            <br />
            <input
                type="text"
                name="name"
                id="name"
                v-model="newTechnology.name"
            />
            <br />
            <br />
            <label for="description">Descrizione</label><br />
            <input
                type="text"
                name="description"
                id="description"
                v-model="newTechnology.description"
            />
            <br />
            <br />

            <input style="padding: 10px" type="submit" value="Crea" />
        </form>
    </div>

    <div v-else>
        <div v-for="technology in technologies" :key="technology.id">
            <h2>
                Tech ID: {{ technology.id }} <br />
                Tech Name: {{ technology.name }}
            </h2>
            <h3>Tech Description: {{ technology.description }}</h3>
            <hr />
        </div>
    </div>
</template>

<style scoped></style>
