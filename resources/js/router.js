
import { createRouter, createWebHistory ,RouterView} from 'vue-router'
import Trans from "@/plugins/i18n/translation.js";

const routes = [
    // {path: "/", component:  () =>  import('./components/test/MakeOffer.vue'), name:'index'},
    // {path: "/about", component:  () =>  import('./components/about/Index.vue'), name:'about.index'},
    //  {path: "/make", component:  () =>  import('./components/test/MakeOffer.vue'), name:'test.make'},
    // // {path: "/posts/:post/", component:  () =>  import('./components/Post/Show.vue'), name:'post.show'},
    // // {path: "/posts/:post/edit", component:  () =>  import('./components/Post/Edit.vue'), name:'post.edit'},
    {
        path: "/:locale?",
        component: RouterView,
        beforeEnter: Trans.routeMiddleware,
        children: [
            {
                path: '',
                name: 'home.index',
                component: () => import('./components/home/HomeComponent.vue'),
            },
            {
                path: 'news',
                name: 'news.index',
                component: () => import('./components/news/NewsComponent.vue')
            },
            {
                path: 'news/:post',
                name: 'news.post',
                component: () => import('./components/news/Post.vue')
            },
            {
                path: 'about',
                name: 'about.index',
                component: () => import('./components/about/AboutComponent.vue')
            },
            {
                path: 'products',
                name: 'products.index',
                component: () => import('./components/products/ProductsComponent.vue'),
            },
            {
                path: 'products/:product',
                name: 'products.product',
                component: () => import('./components/products/Product.vue'),
            },
            {
                path: 'offer/create',
                name: 'offer.create',
                component: () => import('./components/makeOffer/MakeOfferComponent.vue')
            },
            {
                path: 'contacts',
                name: 'contacts.index',
                component: () => import('./components/contacts/ContactsComponent.vue')
            },

        ]
    }
]


export default createRouter({
    history: createWebHistory(),
    routes,
})

