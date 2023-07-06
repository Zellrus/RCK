<template>
    <section class="d-sm-flex d-xxl-flex justify-content-xxl-center" style="width: 100%;">
        <div class="container d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-xxl-center" style="max-width: none;width: 100%;">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-xxl-center" style="width: 100%;">

                <div v-for="prod in this.products" class="col-10 col-sm-10 col-md-6 col-lg-4 col-xl-3 col-xxl-3 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">
                    <div>
                        <img class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" style="margin-top: 10px;margin-bottom: 10px;" :src= "prod.image" width="100%" height="100%">
                        <h4 class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" style="margin-top: 10px;margin-bottom: 20px;">{{prod.name}}</h4>
                        <h3 class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center " style="margin-top: 10px;margin-bottom: 20px;">{{$t(in_stock(prod.in_stock))}}</h3>
                        <router-link class="btn btn-primary d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" type="button"  :to="{name: 'products.product',params:{product: prod.id}}" style="margin: 0px auto;margin-bottom: 20px;margin-top: 10px;">Подробнее</router-link>
                    </div>
                </div>


            </div>
        </div>
    </section>




<!--    <div class="container">-->
<!--        <div class="row align-items-start">-->
<!--            <div class="col" v-for="prod in this.products">-->
<!--                <div class="card" style="width: 18rem;">-->
<!--                    <img :src= "prod.image" class="card-img-top" alt="...">-->
<!--                    <div class="card-body">-->
<!--                        <h5 class="card-title">{{prod.name}}</h5>-->
<!--                        <p :class="prod.in_stock == 0 ? 'card-text text-danger' : 'card-text' ">{{$t(in_stock(prod.in_stock))}}</p>-->
<!--                        <p class="card-text">{{prod.description}}</p>-->
<!--                        <a href="" class="btn btn-dark">Подробнее</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--</div>-->
<!--    </div>-->


</template>

<script>

import router from "@/router.js";

export default {
    name: "ProductsComponent",
    data(){
        return{
            products: {},
        }
    },
    methods:{
        router() {
            return router
        },
        getProducts(){
            axios.get("/api/product/")
                .then(res=>{
                    this.products = res.data
                    console.log(this.products)
                })
                .catch(
                    console.log("Произошла ошибка при отправке запроса.")
                )
        },
        in_stock(a){
            return a ? "products.inStock.true" : "products.inStock.false"
        },
    },
    mounted() {
        this.getProducts()
    },
    computed:{

    }
}
</script>

<style scoped>
@import "css/Footer-Dark-Multi-Column-icons.css";
</style>
