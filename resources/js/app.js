
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('web-home', require('./web/Home.vue').default);
Vue.component('project-senior', require('./web/proyectos/SeniorSuite.vue').default);
/**
 * Componentes para la administración
 */
 Vue.component('admin-dashboard', require('./admin/Dashboard.vue').default);
 Vue.component('create-project', require('./admin/CreateProject.vue').default);
 Vue.component('create-blog', require('./admin/blog/Crear.vue').default);




 import Vue from 'vue'
 import Router from 'vue-router'
 Vue.use(Router)
 let router = new Router({
       routes:[
         {
           path:'/admin-dashboard',
           component: require ('./admin/Dashboard.vue').default
         },
         {
           path:'/create-project',
           component: require ('./admin/CreateProject.vue').default
         }

       ],
   mode: 'history' 
 });

const app = new Vue({
    el: '#app',
    router
});
