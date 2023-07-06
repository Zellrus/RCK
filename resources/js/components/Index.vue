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
            console.log('Component mounted!')
            this.changeTitleLocale();
        },
        methods:{
          changeTitleLocale(){
              switch (document.querySelector('html').getAttribute('lang')){
                  case 'ru':    document.querySelector('title').innerText="РЦК";break; //еще заменить в трансляторе
                  case 'en':    document.querySelector('title').innerText="RCK";break;
                }
              }
        },
        components: {
            Header,
            Footer
        },
    }
</script>
<style scoped>


</style>
