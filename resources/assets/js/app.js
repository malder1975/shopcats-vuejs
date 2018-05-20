


require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)



//Vue.component('example', require('./components/Example.vue'));

let ShopHeader = require('./components/ShopHeader.vue');
let CategoriesSidebar = require('./components/CategoriesSidebar.vue');
let ContentGoods = require('./components/ContentGoods.vue');


const app = new Vue({
    el: '#app',
    //router,
    components: {
        ShopHeader,
        CategoriesSidebar,
        ContentGoods
    }
});
