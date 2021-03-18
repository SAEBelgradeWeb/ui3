<template>
    <div>
        <button type="button" @click="sendEmail(id)">Send email</button>
    </div>
</template>

<script>
export default {
    props: ['id'],
    methods: {
        sendEmail(id) {
            axios.post('/api/doctors/send-email', {
                id: id
            })
        }
    }
}
</script>

<style>
button {
    border: 1px solid white;
    background-color: orange;
    color: white;
    padding: 10px;
    border-radius: 10px;
}
</style>
