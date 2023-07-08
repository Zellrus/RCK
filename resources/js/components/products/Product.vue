<template>
<div class="container">
    <div class="row">
        <div class="col">
            <ul class="list-group list-group-flush">


            </ul>
            <span v-html="this.test"></span>
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
        test : null,

    }},
    methods:{
        getProduct() {
            axios.get(`/api/products/${this.$route.params.product}`)
                .then(res=>{
                    this.product = res.data
                    this.readFile(this.product.content)
                        .then(content => {
                           this.test=content;
                            // console.log(content)
                        })
                        .catch(error => {

                        });
                    // console.log(this.product)
                })
                .catch(
                    console.log("Произошла ошибка при отправке запроса.")
                )
        },
        async  readFile(path) {
            try {
                const response = await axios.get(path);
                return response.data;
            } catch (error) {
                throw new Error(`Failed to read file: ${error.message}`);
            }
        }
        },

    mounted() {
        this.getProduct()
        //console.log((this.$route.params.product))


    },

}
</script>

<style scoped>

</style>
