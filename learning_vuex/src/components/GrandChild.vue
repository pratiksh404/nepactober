<template lang="">
    <div>
          <Counter/>
       <!--  <h1>Grand Child</h1> -->
        <GreateGrandChild/>
    </div>
</template>
<script>
import GreateGrandChild from '@/components/GreateGrandChild.vue';
import Counter from '@/components/Counter.vue';
export default {
    'name': 'GrandChild',
    components: {
        GreateGrandChild,
        Counter
    }
}
</script>
<style lang="">
    
</style>