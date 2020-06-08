<template>

    <div>
        <saver></saver>
    </div>
</template>

<script>

    import Saver from "./components/Saver";

    export default {
        components: {
            'saver': Saver
        },
        name: "App",
        data: function () {
            return {
                text: 'Hello World!!!'
            }
        }
    }
</script>

<style scoped>

</style>