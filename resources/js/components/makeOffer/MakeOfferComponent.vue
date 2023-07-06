<template>
  <div class="container">
              <div class="form-group">
                  <label for="nameCompany">Название компании</label>
                  <input type="text" class="form-control" v-model="name" id="nameCompany" placeholder="" required>
              </div>
          <div class="form-group">
              <label for="exampleFormControlInput1">Email компании</label>
              <input type="email" class="form-control" v-model="email"  id="exampleFormControlInput1" placeholder="name@example.com" required>
          </div>
          <div class="form-group">
              <label for="exampleFormControlInput1">Номер компании</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" v-model="number" placeholder="+3735555555" required>
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Выберите товар</label>
              <select v-model="choiseProduct" class="form-control" id="exampleFormControlSelect1">
                  <option  v-for="(prod, i) in this.products" :key="i">
                   {{prod.id}} {{prod.name}}
                  </option>

              </select>
          </div>

          <div class="form-group">
              <label for="exampleFormControlTextarea1">Оставьте сообщение (по желанию)</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" v-model="message"  rows="3"></textarea>
          </div>
<button class="btn btn-info">Отправить</button>
  </div>
</template>

<script>
export default {
    name: "MakeOfferComponent",
    data(){
        return {
            name: null,
            email:null,
            number: null,
            message: null,
            products:{},
            choiseProduct:null,
        }
    },
    methods:{
      sendForm(){

      },
      getProducts(){
          axios.get("/api/product/")
              .then(res=>{
            this.products = res.data

          })
              .catch(
                  console.log("Произошла ошибка при отправке запроса.")
              )
      }

    },
    mounted() {
        this.getProducts()
    }

}
</script>

<style scoped>

</style>
