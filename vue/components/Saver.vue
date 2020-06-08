<template>
    <div id="saver-form">
        <h3>{{ title }}</h3>
        <input v-model="telemetryData">
        <button v-on:click="send">Send</button>
    </div>
</template>

<script>
    import axios from "axios";

    export default {
        name: "Saver",
        data: function () {
            return {
                title: "Отправить данные используя API",
                telemetryData: ""
            }
        },
        methods: {
            send: function (event) {
                axios.post("/api/telemetry/create", {"telemetry_string": this.telemetryData}, {
                    headers: {
                        'Authorization': 'Bearer qiox0a7vts'
                    }
                })
                    .then(response => (this.info = response))
                    .catch(error => console.log(error));
            }
        }
    }

</script>

<style scoped>

</style>