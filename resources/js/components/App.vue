<template>
    <h2>Ola, {{ name }}</h2>
    <br>
    <input type="text" v-model="name">
</template>

<script>
    export default {
        data() {
            return {
                name: "test",
            }
        }
    }
</script>