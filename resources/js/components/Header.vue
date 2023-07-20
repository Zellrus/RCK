<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="background: url(https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot) center center / cover no-repeat;height: 600px;">
            <div class="carousel-item active">
                <img src="https://w.forfun.com/fetch/4a/4af0bcc2b0c34fd573eca9f1be9ab245.jpeg" class="d-block w-100 p-3 h-auto d-inline-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://s1.1zoom.ru/big7/471/Australia_Parks_378278.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://w.forfun.com/fetch/42/429f04f158ff611068a6eba8af8fe776.jpeg?w=1470&r=0.5625" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <nav class="navbar navbar-light navbar-expand-md sticky-top" style="background-color: white; opacity: 0.94; background-size: cover; background-position:center ;background-repeat: no-repeat">
<!--    <nav class="navbar navbar-light navbar-expand-md sticky-top" style="background: linear-gradient(90deg,  gray 60%, white);">-->
        <div class="container-fluid"><img style="width: 80px;" src="/images/logo.jpg"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center text-sm-center text-md-center text-lg-center text-xl-center text-xxl-center d-xxl-flex justify-content-xxl-center" id="navcol-1" style="text-align: center;width: 1200px;">
                <ul class="navbar-nav" >
                    <li class="nav-item"><router-link class="nav-link text-center" :to="{name: 'home.index'}" style="text-align: center;">{{ $t("nav.home") }}</router-link></li>
                    <li class="nav-item text-center" style="text-align: center; "><router-link class="nav-link text-center" :to="{name: 'news.index'}" style="text-align: center;">{{ $t("nav.news") }}</router-link></li>
                    <li class="nav-item text-center" style="text-align: center;"><router-link class="nav-link text-center" :to="{name: 'about.index'}" style="text-align: center;">{{ $t("nav.about") }}</router-link></li>
<!--                    <li class="nav-item text-center" style="text-align: center;"><router-link class="nav-link text-center" :to="{name: 'contacts.index'}" style="text-align: center;">{{ $t("nav.contacts") }}</router-link></li>-->
                    <li class="nav-item text-center" style="text-align: center;"><router-link class="nav-link text-center" :to="{name: 'products.index'}" style="text-align: center;">{{ $t("nav.products") }}</router-link></li>
                    <li class="nav-item text-center" style="text-align: center;"><router-link class="nav-link text-center" :to="{name: 'offer.create'}" style="text-align: center;">{{ $t("nav.makeOffer") }}</router-link></li>

                </ul>
<!--                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="text-decoration: none;color: #01661e;">RU</a>-->
<!--                    <div class="dropdown-menu" style="color: #01661e;width: 60px;min-width: 60px;"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>-->
<!--                </div>-->
<!--                <div class="dropdown">-->
<!--                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Русский-->
<!--                    </a>-->

<!--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
<!--                        <li><a class="dropdown-item" href="#">Английский</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Украинский</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Молдавский</a></li>-->
<!--                    </ul>-->
<!--                </div>-->

                <language-switcher></language-switcher>

            </div>

            <div class="" style="color: black">
            <h5>+3774433343224&nbsp;</h5>
            <h5>+37377530573</h5>
            </div>
        </div>
    </nav>




</template>

<script>
import languageSwitcher from "@/components/LanguageSwitcher.vue";

export default {
    name: "Header",



    mounted() {
        console.log('HEADER')

    },
    components:{
        languageSwitcher
    }
}
</script>

<style scoped>
.nav-link {
    color:black;
}
.active {
    color:green;
}
</style>
