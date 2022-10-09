<template lang="">
    <div>
        <h1>Counter</h1>
        <h2 class="counter">{{ count }}</h2>
        <button @click="decrement(parseInt(value))">-</button>
        <input v-model="value" type="number" min="1" />
        <button @click="increment(parseInt(value))">+</button>
        <br>
        <button class="btn" @click="addRandomNumber">Add Random Value</button>
    </div>
</template>
<script>
import { mapState, mapMutations, mapActions } from 'vuex';
export default {
    name: "Counter",
    data() {
        return {
            value: 1
        };
    },
    computed: {
        ...mapState([
            'count'
        ])
    },
    methods: {
        ...mapMutations([
            'increment',
            'decrement'
        ]),
        ...mapActions([
            'addRandomNumber'
        ])
    },
}
</script>
<style>
     .counter {
        font-size: 5rem;
    }
    button {
        border-radius: 100%;
        border: none;
        width: 2rem;
        height: 2rem;
        font-weight: 700;
        cursor: pointer;
    }
    input {
        padding: 0.4rem;
        margin: 0 0.5rem;
        text-align: center;
    }
    .btn {
        border-radius: 0.5rem;
        width: auto;
        background: #41B983;
        margin-top: 1rem;
        color: white;
        cursor: pointer;
    }
</style>