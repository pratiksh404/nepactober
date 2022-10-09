<template>
<div class="container">
    <LargeCardDisplay v-for="cardInfo in largeCardSections" :key="cardInfo.id" :cardInfo="cardInfo" />
    <SmallCardDisplay v-for="cardInfo in smallCardSections" :key="cardInfo.id" :cardInfo="cardInfo" />
</div>
</template>

<script>
import { largeCardSections, smallCardSections } from '@/assets/data.js'
export default {
  data(){
    return{
      largeCardSections: largeCardSections,
      smallCardSections: smallCardSections
    }
  }
}
</script>

