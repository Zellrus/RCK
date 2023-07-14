<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-group list-group-flush">


                </ul>
                <span v-html="this.test"></span>
            </div>
        </div>
        <router-link class="btn btn-primary"  :to="{name: 'news.index'}">Назад</router-link>
    </div>
</template>

<script>


export default {
    name: "Post",
    data () {return {
        post: {},
        test : null,

    }},
    methods:{
        getPost() {
            axios.get(`/api/posts/${this.$route.params.post}`)
                .then(res=>{
                    this.post = res.data
                    this.readFile(this.post.content)
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
        this.getPost()
        //console.log((this.$route.params.product))


    },

}
</script>

<style scoped>

</style>
