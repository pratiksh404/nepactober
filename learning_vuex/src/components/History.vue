<template lang="">
    <div>
        <div v-if="loadingStatus">
<h2>Loading ... </h2>
        </div>
        <div v-else>
            <div class="flex">
            <p v-for="(number,index) in values" :key="index" :class="{'bold': searchedValues(parseInt(value)).includes(parseInt(number))}">
                {{ number }}
            </p>
        </div>
        <br>
        <input type="number" v-model="value" placeholder="Search by value" />
        <br>
        Serach by value
        </div>
    </div>
</template>
<script>
import { mapState, mapGetters } from 'vuex';
export default {
    name: "History",
    data(){
       return {
           value: 0
       }
    },
    computed: {
        ...mapState([
            'values'
        ]),
        ...mapGetters(["searchedValues","loadingStatus"]),
    },
}
</script>
<style scoped>
        .container {
        margin-top: 7rem;
    }
    .flex {
        display: flex;
        text-align: center;
        width: 25rem;
        margin: 0 auto;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .flex p {
        margin: 1rem
    }
    .bold {
        font-weight: 900;
    }
</style>