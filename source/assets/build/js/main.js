/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Adds and removes transparency class if at top or not.
window.onscroll = function () {
  var navbar = document.getElementById("navbar");
  var navbar_logo = document.getElementById("navbar-logo");
  var body = document.body;
  var doc = document.documentElement;
  doc = doc.clientHeight ? doc : body;

  if (doc.scrollTop == 0) {
    navbar_logo.src = "/assets/images/logo-dark.png";
    navbar.classList.remove('body-scrolled');
    navbar.classList.add('bg-transparent');
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark');
  } else {
    navbar_logo.src = "/assets/images/logo.png";
    navbar.classList.remove('navbar-dark');
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('navbar-light');
    navbar.classList.add('body-scrolled');
  }
};

/***/ }),

/***/ "./source/_assets/sass/components.scss":
/*!*********************************************!*\
  !*** ./source/_assets/sass/components.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./source/_assets/sass/page_structure.scss":
/*!*************************************************!*\
  !*** ./source/_assets/sass/page_structure.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************************************************!*\
  !*** multi ./source/_assets/js/main.js ./source/_assets/sass/page_structure.scss ./source/_assets/sass/components.scss ***!
  \*************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\ben_m\Documents\Development\Projects\SttFrontStatic2.0\source\_assets\js\main.js */"./source/_assets/js/main.js");
__webpack_require__(/*! C:\Users\ben_m\Documents\Development\Projects\SttFrontStatic2.0\source\_assets\sass\page_structure.scss */"./source/_assets/sass/page_structure.scss");
module.exports = __webpack_require__(/*! C:\Users\ben_m\Documents\Development\Projects\SttFrontStatic2.0\source\_assets\sass\components.scss */"./source/_assets/sass/components.scss");


/***/ })

/******/ });