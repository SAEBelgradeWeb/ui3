<template>
    <div>
        <h1>Doctors list</h1>
        <div v-for="department in departments">
            {{department.title}}
            <ul>
                <li v-for="doctor in department.doctors">{{doctor.name}}</li>
            </ul>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            departments: []
        }
    },
    async mounted() {
        const result = await axios.get('/api/departments');
        this.departments = result.data;

    }
}
</script>
