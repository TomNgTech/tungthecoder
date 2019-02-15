/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

import Buefy from 'buefy';
Vue.use(Buefy);

Vue.component('slug-widget', require('./components/slugWidget.vue'));

$(document).ready(function() {
    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
});

$(document).ready(function() {
    // Check for click events on the navbar burger icon
    $(".dropdown-trigger").click(function() {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".dropdown").toggleClass("is-active");

    });
});

$('.hovereffect').on("touchstart", function(e) {
  "use strict"; //satisfy the code inspectors
  var link = $(this); //preselect the link
  if (link.hasClass('hasHover')) {
    return true;
  } else {
    link.addClass("hasHover");
    $('.hovereffect').not(this).removeClass("hasHover");
    e.preventDefault();
    return false; //extra, and to make sure the function has consistent return points
  }
});

require('./manage.js');