<template>

   <Header></Header>
    <router-view></router-view>
    <Footer></Footer>
</template>


<script>


import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue"
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
            Header,
            Footer
        },
    }
</script>
<style scoped>
/*@import "@/../css/nicepage.css";*/


</style>
