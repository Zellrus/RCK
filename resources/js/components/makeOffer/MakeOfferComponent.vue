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
          <label for="exampleFormControlSelect2">Выберите категорию или товар</label>
          <select v-model="choiseProductorCategory" class="form-control" id="exampleFormControlSelect2" @change="this.test(choiseProductorCategory)">
              <option  v-for="category in this.categories.filter(el=> el.id != 1)" :value="(category.id)+'cat'">
                   {{category.title}}
              </option>
              <option  v-for="prod in this.products.filter(el=> el.category_id == 1)" :value="(prod.id)+'prod'">
                  {{prod.name}}
              </option>
          </select>
      </div>
          <div class="form-group" v-show="flagCategory">
              <label for="exampleFormControlSelect1">Выберите товар</label>
              <select  v-model="choiseProduct" class="form-control" id="exampleFormControlSelect1">
                  <option  v-for="prod in this.products.filter(el=> el.category_id == this.newChoise)" :value="prod.id">
                    {{prod.name}}
                  </option>
              </select>
          </div>

          <div class="form-group">
              <label for="exampleFormControlTextarea1">Оставьте сообщение (по желанию)</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" v-model="message"  rows="3"></textarea>
          </div>
<button @click="this.sendForm()" class="btn btn-info">Отправить</button> <p class="fs-1" v-show="is_sand">Отправлено!</p>
<!-- {{this.products}}-->

<!--      {{this.products.filter(el=> el.category_id == 6)}}-->
<!--      {{this.flagCategory}}-->

<!--      {{this.newChoise}}-->
<!--      {{this.choiseProduct}}-->
  </div>
</template>

<script>
import axios from "axios";

export default {
    name: "MakeOfferComponent",
    data(){
        return {
            name: null,
            email:null,
            number: null,
            message: null,
            choiseProductorCategory:null,
            newChoise:null,
            choiseProduct:null,
            products:[],
            categories: [],
            flagCategory: null,
            is_sand: false,
        }
    },
    methods:{
      sendForm(){
    axios.post('/api/offer/create',{
        name: this.name,
        email:this.email,
        number: this.number,
        message: this.message,
        id_product: this.choiseProduct,

    }).then(res=>{
            console.log(res.data);
            this.is_sand = true
        }
    ).catch(error => {
        console.log("ERRRR:: ",error.response.data);

    });
      },
      getProducts(){
          axios.get("/api/products/")
              .then(res=>{
                    this.products = res.data[0];
                    //console.log(this.products);
                  this.categories = res.data[1];
              })
              .catch(
                  console.log("Произошла ошибка при отправке запроса.")
              )
      },
        test(f){
            this.newChoise = parseInt(this.choiseProductorCategory.match(/\d+/))
           if (f.includes('cat')){ console.log(f + "Категория"); this.flagCategory= true;}
           else if (f.includes('prod')){ console.log(f + "Продукт"); this.flagCategory= false; this.newChoise=this.choiseProduct }

        }


    },
    mounted() {
        this.getProducts()
    }

}
</script>

<style scoped>

</style>
