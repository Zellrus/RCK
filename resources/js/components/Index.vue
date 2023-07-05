<template>

   <Header></Header>




    <router-view></router-view>
</template>


<script>


import Header from "@/components/Header.vue";
    export default {
        data(){
            return{
                lex:"alex",
            }
        },
        mounted() {
            console.log('Component mounted.!!!!')
        },
        components: {
            Header
        },
    }
</script>
<style scoped>
/*@import "@/../css/nicepage.css";*/


</style>
