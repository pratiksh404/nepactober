
<template>
    <div>
        <h1>Result : {{ score }} ms</h1>
        <br>
        <h1><b>{{ complement }}</b></h1>
    </div>
</template>
<script>
export default {
    props: ['score'],
    computed: {
        complement(){
            if(this.score < 300){
                return "Fast as flash boyyyyy!";
            }
            if(this.score < 350){
                return "Hey, you are pretty good!";
            }
            if(this.score < 400){
                return "Not bad, but you can do better!";
            }
            if (this.score < 450){
                return "You are pretty bad!";
            } 
            if (this.score < 500){
                return "You are so bad!";
            }   
            return "Snail can do better!";
        }
    }
}
</script>
<style lang="">
    
</style>