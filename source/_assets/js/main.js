//import libraries here
require('bootstrap');
window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
window.Swiper = require('swiper').default;
import 'swiper/dist/css/swiper.css'
window.serializeJSON = require('jquery-serializejson');
window.validate = require('jquery-validation');
//import project js files here
const swiper = require('./swiper');
const navbar = require('./navbar');
const subscribe = require('./subscribe');

$('.modal ').insertAfter($('body'));