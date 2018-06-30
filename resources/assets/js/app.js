
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import router from './router';
import App from './components/App';
import VeeValidate from 'vee-validate';
import zh_CN from 'vee-validate/dist/locale/zh_CN'
import VueI18n from 'vue-i18n';
Vue.use(VueI18n);
const i18n = new VueI18n({
    locale: 'zh_CN',
});
Vue.use(VeeValidate, {
    i18n,
    i18nRootKey: 'validation',
    dictionary: {
        zh_CN
    }
});

Vue.use(VueRouter);
Vue.component('app', App);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



new Vue({
    el: '#app',
    router
});
