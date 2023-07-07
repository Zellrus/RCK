<template>
<div class="container">
    <div class="row">
        <div class="col">
            <img :src="this.product.image">
        </div>
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><p>Название продукта: {{this.product.name}}</p></li>
                <li class="list-group-item"><p>Описание: {{this.product.description}}</p></li>
            </ul>
    </div>
    </div>
<router-link class="btn btn-primary"  :to="{name: 'products.index'}">Назад</router-link>
</div>
</template>

<script>


export default {
    name: "Product",
    data () {return {
        product: {},

    }},
    methods:{
        getProduct() {
            axios.get(`/api/product/${this.$route.params.product}`)
                .then(res=>{
                    this.product = res.data
                    // console.log(this.product)
                })
                .catch(
                    console.log("Произошла ошибка при отправке запроса.")
                )
        },
    },
    mounted() {
        this.getProduct()
        //console.log((this.$route.params.product))
    },

}
</script>

<style scoped>

</style>
