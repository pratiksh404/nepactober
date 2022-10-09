<template>
    <div>
        <h1>Job Detail Page</h1>
        <p>The job id is {{ id }}</p>
       <div v-if="job">
            <p>
            {{ job.description }}
        </p>
        <h3>Location: {{ job.location }}</h3>
        <h3>Salary: {{ job.salary }}</h3>
        <h3>Misson: {{ job.mission }}</h3>
       </div>
       <span v-else>Loading ... </span>
    </div>
</template>
<script>
export default {
    props: ['id'],
    data(){
        return {
            job: null
        }
    },
    async mounted() {
        await new Promise(r => setTimeout(r, 2000));
        fetch('http://localhost:3000/jobs/' + this.id)
            .then(res => res.json())
            .then(data => {
                this.job = data;
            })
            .catch(err => console.log(err));
    },
}
</script>
<style scoped>
    
</style>