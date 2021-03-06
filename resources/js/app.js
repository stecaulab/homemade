/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */

// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('homepage-component', require('./components/HomepageComponent.vue').default);
Vue.component('read-component', require('./components/ReadComponent.vue').default);
Vue.component('update-component', require('./components/UpdateComponent.vue').default);
Vue.component('create-component', require('./components/CreateComponent.vue').default);
Vue.component('comment-component', require('./components/CommentComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import Vue from 'vue';
 import VueRouter from 'vue-router'; //importo Vue Router

 Vue.use(VueRouter)

 import HomepageComponent from './components/HomepageComponent.vue'; //importo componente Homepage
 import ReadComponent from './components/ReadComponent.vue'; //importo componente read
 import UpdateComponent from './components/UpdateComponent.vue';
 import CreateComponent from './components/CreateComponent.vue';
 import CommentComponent from './components/CommentComponent.vue';
//  import App from './components/view/App.vue';
//  import Home from './components/view/Home.vue';
//  import Menu from './components/view/Menu.vue';

 const router = new VueRouter({

        mode: 'history',

        routes:  [

            {

                path:   '/admin/dashboard',
                name:   'read',
                component: ReadComponent,
                props:true,
            },

            {

                path:   '/admin/dashboard/update',
                name:   'update',
                component: UpdateComponent,
                props:true,
            },

            {

                path:   '/admin/dashboard/create',
                name:   'create',
                component: CreateComponent,
                props:true,
            },

         ],

});

const app = new Vue({
    el: '#app',
    router,
    components: { HomepageComponent , CommentComponent}

});

