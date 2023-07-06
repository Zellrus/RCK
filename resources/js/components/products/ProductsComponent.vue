<template>
    <div class="container">
        <div class="row align-items-start">
            <div class="col" v-for="prod in this.products">
                <div class="card" style="width: 18rem;">
                    <img :src= "prod.image" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{prod.name}}</h5>
                        <p :class="prod.in_stock == 0 ? 'card-text text-danger' : 'card-text' ">{{$t(in_stock(prod.in_stock))}}</p>
                        <p class="card-text">{{prod.description}}</p>
                        <a href="" class="btn btn-dark">Подробнее</a>
                    </div>
                </div>
            </div>

</div>
    </div>


</template>

<script>
export default {
    name: "ProductsComponent",
    data(){
        return{
            products: {},
        }
    },
    methods:{
        getProducts(){
            axios.get("/api/product/")
                .then(res=>{
                    this.products = res.data
                    console.log(this.products[0])
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

</style>
