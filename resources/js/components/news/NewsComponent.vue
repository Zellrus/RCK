<template>
    <section style="margin-top: 10px;margin-bottom: 10px;">
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col">
                    <h1 class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">Новости</h1>
                </div>
            </div>
            <div class="row gy-4 gy-md-0" v-for="post in posts">

                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid d-sm-flex justify-content-sm-center w-100 fit-cover" style="min-height: 300px" :src="post.image"></div>
                </div>
                <div class="col-md-6 d-sm-flex d-md-flex justify-content-sm-center align-items-md-center">
                    <div style="max-width: 350px;">
                        <h2 class="text-uppercase fw-bold text-center d-sm-flex justify-content-sm-center">{{post.title}}</h2>
                        <p class="text-center my-3">{{post.description}}</p><router-link class="btn btn-outline-primary btn-lg d-flex d-sm-flex justify-content-center justify-content-sm-center" type="button"  :to="{name: 'news.post',params:{post: post.id}}">Читать дальше</router-link>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "NewsComponent",
    data(){
        return{
            posts:{},
        }
    },
    methods:{
        getPosts(){
            axios.get("/api/posts/")
                .then(res=>{
                    this.posts = res.data
                    console.log(this.posts)
                })
                .catch(
                    console.log("Произошла ошибка при отправке запроса.")
                )
                    }
    },
    mounted() {
         this.getPosts()
    },
}
</script>

<style scoped>

</style>
