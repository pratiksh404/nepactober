<template>
    <div class="container">
        <h4 class="header">
            {{ cardInfo.title }}
        </h4>
        <p class="snippet" >
              {{ cardInfo.snippet }}
        </p>
        <div class="cards-container">
           <LargeCard v-for="card in cardInfo.cards" :key="card.id" :card="card" />
        </div>
    </div>
</template>

<script>
    export default {
        'name': 'LargeCardDisplay',
        props: ['cardInfo']
    }
</script>

<style scoped>
  .container {
    margin-top: 12rem;
    }
    .header {
        font-weight: 700;
        font-size: 1.5rem;
    }
    .snippet {
        color: grey;
        margin-bottom: 1.5rem;
    }
    .cards-container {
        display: flex;
        justify-content: space-between;
    }
</style>