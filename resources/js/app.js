
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import AOS from  'aos'
import Vue from 'vue'
import Swiper from 'swiper';
// import 'aos/dist/aos.css'


import HomePage from './components/HomePage.js';

Vue.component('login-button', require('./components/buttons/LoginButton.vue'));
Vue.component('register-button', require('./components/buttons/RegisterButton.vue'));

import LoginComponent from './components/LoginComponent.js';
import RegisterComponent from './components/RegisterComponent.js';
import ForgetPasswordComponent from './components/ForgetPasswordComponent.js';
import ResetPasswordComponent from './components/ResetPasswordComponent.js';


const app = new Vue({
    el: '#app',
    components:{
    	HomePage,
    	LoginComponent,
    	RegisterComponent,
    	ForgetPasswordComponent,
    	ResetPasswordComponent
    },
    created () {
      // AOS.init({
      //   once: true,
      //   offset: 50
      // })
    }
});

window.onload = function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.swiper-container-customers', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  })
};
