<template lang="">
    <div>
       <!--  <h1>Child</h1> -->
        <GrandChild />
    </div>
</template>
<script>
import GrandChild from '@/components/GrandChild.vue';
export default {
    'name': 'Child',
    components: {
        GrandChild
    }
}
</script>
<style lang="">
    
</style>