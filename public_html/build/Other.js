(self["webpackChunk"] = self["webpackChunk"] || []).push([["Other"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$":
/*!****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.[jt]sx?$ ***!
  \****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }














function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_12__.Controller);



/***/ }),

/***/ "./assets/appOther.js":
/*!****************************!*\
  !*** ./assets/appOther.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");
/* harmony import */ var core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_replace_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.number.to-fixed.js */ "./node_modules/core-js/modules/es.number.to-fixed.js");
/* harmony import */ var core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_to_fixed_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.parse-float.js */ "./node_modules/core-js/modules/es.parse-float.js");
/* harmony import */ var core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_parse_float_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.splice.js */ "./node_modules/core-js/modules/es.array.splice.js");
/* harmony import */ var core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_splice_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _bootstrap__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }



















/*
* Welcome to your app's main JavaScript file!
*
* We recommend including the built version of this JavaScript file
* (and its CSS file) in your base layout (base.html.twig).
*/
// any CSS you import will output into a single css file (app.css in this case)
 // start the Stimulus application


/********** chargement de la page js */

window.addEventListener('load', function (event) {
  var button = document.getElementById("button");
  var button3 = document.getElementsByClassName("button");
  var h1 = document.getElementById("h1");
  var mc = document.getElementsByClassName("modifContact");
  var mp = document.getElementsByClassName("modifProjet");
  var sB = document.getElementsByClassName("spaceBasket");
  var sB2 = document.getElementsByClassName("spaceBasket2");
  var sB3 = document.getElementsByClassName("spaceBasket3");
  var p5 = document.getElementsByClassName("pour5");
  var p55 = document.getElementsByClassName("p55");
  var allBasket = document.getElementById('allBasket');
  var order = document.getElementById('order');
  var order2 = document.getElementById('order2');
  var respon14 = document.getElementsByClassName('respon14');
  var rBas = document.getElementById("resultBasket");
  var stockBeer = [];
  pou5;
  var price = [];
  var valuePrice = [];
  var valuePResult = [];
  var deleteBeer = [];
  var deleteCategory = [];
  var deleteContact = [];
  var deleteProjet = [];
  var aBasket = [];
  var ac3 = [];
  var addBI = [];
  var pou5 = [];
  var montant = "Total = ";

  for (var i = 0; i < sB.length; i++) {
    stockBeer.push(document.getElementById(sB[i].children[0].id));
  }

  for (var _i = 0; _i < sB2.length; _i++) {
    price.push(document.getElementById(sB2[_i].children[1].id));
  }

  for (var _i2 = 0; _i2 < sB3.length; _i2++) {
    valuePrice.push(document.getElementById(sB3[_i2].children[0].id));
    valuePResult.push(document.getElementById(sB3[_i2].children[1].id));
  }

  for (var _i3 = 0; _i3 < p5.length; _i3++) {
    deleteBeer.push(document.getElementById(p5[_i3].children[1].id));
  }

  for (var _i4 = 0; _i4 < p55.length; _i4++) {
    deleteCategory.push(document.getElementById(p55[_i4].children[2].id));
  }

  for (var _i5 = 1; _i5 < mc.length; _i5++) {
    deleteContact.push(document.getElementById(mc[_i5].children[3].id));
  }

  for (var _i6 = 0; _i6 < mp.length; _i6++) {
    deleteProjet.push(document.getElementById(mp[_i6].children[0].id));
  }

  var body = document.querySelector("body");

  if (allBasket) {
    var clientWidth = function clientWidth() {
      for (var k = 0; k < respon14.length; k++) {
        if (allBasket.clientWidth < 250) {
          if (rBas) {
            rBas.style.width = "175px";
          }

          respon14[k].style.width = "100px";
          respon14[k].style.bottom = '60px';
          respon14[k].style.left = "55px";
          respon14[k].style.fontSize = "0.9em";

          if (pou5) {
            for (var q = 0; q < pou5.length; q++) {
              if (pou5[q].children[0].children[0]) {
                pou5[q].children[0].children[0].style.padding = "0 0 0 20px";
              }
            }
          }
        } else {
          if (rBas) {
            if (window.matchMedia("(max-width: 400px)").matches) {
              rBas.style.width = "290px";
            } else {
              rBas.style.width = "375px";
            }
          }

          if (window.matchMedia("(max-width: 400px)").matches) {
            respon14[k].style.width = "165px";
          } else {
            respon14[k].style.width = "175px";
          }

          respon14[k].style.bottom = '30px';
          respon14[k].style.left = '0';

          if (window.matchMedia("(max-width: 400px)").matches) {
            respon14[k].style.fontSize = "0.9em";
          } else {
            respon14[k].style.fontSize = "1.1em";
          }

          if (pou5) {
            for (var _q = 0; _q < pou5.length; _q++) {
              if (pou5[_q].children[0].children[0]) {
                pou5[_q].children[0].children[0].style.padding = 0;
              }
            }
          }
        }
      }
    };

    for (var _i7 = 1; _i7 < allBasket.children.length; _i7++) {
      if (allBasket.children[_i7].children[0]) {
        aBasket.push(document.getElementById(allBasket.children[_i7].children[0].id));
      }

      if (allBasket.children[_i7].children[1]) {
        pou5.push(allBasket.children[_i7].children[1]);
      }
    }

    if (stockBeer) {
      for (var _i8 = 0; _i8 < stockBeer.length / 2; _i8++) {
        ac3.push(allBasket.children[_i8 + 1].children[1].children[0]);
      }
    }

    setInterval(clientWidth, 100);
  }

  var footer = document.getElementById('footer');
  var menuImg = document.getElementById('menuImg');
  var fTop = document.getElementById('fTop');
  var arrow2 = document.getElementsByClassName("arrow2");
  var hide = document.getElementsByClassName("hide");
  var nB = document.getElementById("newB");
  var menuOpen = document.getElementsByClassName("menuOpen");
  var panier = document.getElementById("panier");
  var modalShop = document.getElementById("modalShop");
  var orderShop = document.getElementById("orderShop");
  var errorShop = document.getElementById('errorShop');
  var buttonProfil = document.getElementsByClassName('helloButton');
  var buttonImg1 = button.children[1].children[0].children[0];

  if (button.children[1].children[1]) {
    var buttonImg2 = button.children[1].children[1].children[0];
    buttonImg2.style.height = "30px";
  }

  if (buttonProfil[0]) {
    buttonProfil[0].style.display = "none";
  }

  if (errorShop) {
    sessionStorage.clear();
  }

  var successShop = document.getElementById('successShop');

  if (successShop) {
    sessionStorage.clear();
  }

  if (button) {
    buttonImg1.style.height = "30px";
    button.style.textAlign = "center";
    button.style.left = "32%";
    button.style.visibility = "visible";
    button.style.top = "-131px";
    button.style.display = "flex";
    button.style.width = "25%";
  }

  button3[0].style.display = "none";

  for (var _i9 = 1; _i9 < 3; _i9++) {
    if (button3[_i9]) {
      button3[_i9].style.margin = "10px 5px";
      button3[_i9].style.fontSize = "0.7em";
      button3[_i9].style.transition = "all 0s";
      button3[_i9].style.boxShadow = "none";
      button3[_i9].style.transition = "none";
      button3[_i9].style.borderRadius = "0";
      button3[_i9].style.border = "1px solid rgb(246, 97, 15)";
    }
  }

  h1.style.animation = 'none';
  h1.style.opacity = 1;
  menu.style.opacity = 1;
  menu.style.transition = "none 0s";
  menuImg.style.visibility = "visible";
  body.style.background = "linear-gradient(white, rgb(237, 175, 50, 0.5))";
  body.style.paddingBottom = 0;
  footer.style.marginTop = '0px';
  fTop.style.visibility = 'visible';

  var _iterator = _createForOfIteratorHelper(arrow2),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var arr = _step.value;
      arr.classList.replace("arrow2", "arrow");
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  var _iterator2 = _createForOfIteratorHelper(hide),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      var hid = _step2.value;
      hid.classList.replace("hide", "vHidden");
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }

  for (var _i10 = 0; _i10 < ac3.length; _i10++) {
    ac3[_i10].children[0].style.visibility = "hidden";
    ac3[_i10].children[0].style.height = 0;
    pou5[_i10].style.height = '0px';
  }

  for (var _i11 = 0; _i11 < valuePrice.length; _i11++) {
    if (valuePrice[_i11]) {
      valuePResult[_i11].innerHTML = valuePrice[_i11].value;
    }
  }

  if (allBasket) {
    allBasket.style.visibility = "visible";
  }

  var sp = document.getElementById("shopPresent");

  if (sp) {
    if (sp.children[2].children[0]) {
      sp.children[2].style.height = 0;
      sp.children[2].style.paddingTop = "114px";
    }
  }
  
  const start = Date.now();
  let cplus = document.getElementById('carrePlus');
  let cci = [];

  var _loop = function _loop(_i12) {
   if (stockBeer[_i12 * 2]) {
     cci.push([_i12]);}
  };

  function time(){
    const millis = Date.now() - start;
    let result = Math.floor(millis / 1000);
    if(cplus){
      if(cplus.textContent != result){
        var _loop = function _loop(_i12) {
          let idbe = cci[_i12][0];
          if(stockBeer[idbe * 2]){
            let resultPrice = stockBeer[idbe * 2].value * price[idbe].value;
            valuePrice[idbe].value = parseFloat(resultPrice).toFixed(2);
            valuePResult[idbe].innerHTML = parseFloat(resultPrice).toFixed(2) + "€";}
          stockBeer[_i12 * 2].addEventListener("click", (event) => {
            let resultPrice = stockBeer[_i12 * 2].value * price[_i12].value;
            valuePrice[_i12].value = parseFloat(resultPrice).toFixed(2);
            valuePResult[_i12].innerHTML = parseFloat(resultPrice).toFixed(2) + "€";})
        }
      for (var _i12 = 0; _i12 < stockBeer.length / 2; _i12++) {
        _loop(_i12);
      }
    }
  cplus.textContent = result;}
  return result;
}
setInterval(time, 100);

    //window.addEventListener("scroll", (event) => {
    //var _loop = function _loop(_i12) {
     // let idbe = cci[_i12][0];
     // if (stockBeer[idbe * 2]) {
      //  let resultPrice = stockBeer[idbe * 2].value * price[idbe].value;
      //  valuePrice[idbe].value = parseFloat(resultPrice).toFixed(2);
     //   valuePResult[idbe].innerHTML = parseFloat(resultPrice).toFixed(2) + "€";}
    //  stockBeer[_i12 * 2].addEventListener("click", (event) => {
    //    let resultPrice = stockBeer[_i12*2].value * price[_i12].value;
    //    valuePrice[_i12].value = parseFloat(resultPrice).toFixed(2);
     //   valuePResult[_i12].innerHTML = parseFloat(resultPrice).toFixed(2) + "€";});
  //  };
        
 //   for (var _i12 = 0; _i12 < stockBeer.length / 2; _i12++) {
  //    _loop(_i12);
//    }
 // });
    
  for (var _i12 = 0; _i12 < stockBeer.length / 2; _i12++) {
    _loop(_i12);
  }

  var _loop2 = function _loop2(_i13) {
    if (deleteContact[_i13]) {
      deleteContact[_i13].addEventListener("click", function (event) {
        event.preventDefault();
        var str = deleteContact[_i13].id;
        var j = str.slice(13, str.lenght);
        var m = 'modalCt' + [j];
        var mod = document.getElementById(m);
        mod.style.visibility = "visible";
        var no = 'noct' + [j];
        var non = document.getElementById(no);

        if (non) {
          non.addEventListener("click", function (event) {
            mod.style.visibility = "hidden";
          });
        }
      });
    }
  };

  for (var _i13 = 0; _i13 < deleteContact.length; _i13++) {
    _loop2(_i13);
  }

  var _loop3 = function _loop3(_i14) {
    if (deleteProjet[_i14]) {
      deleteProjet[_i14].addEventListener("click", function (event) {
        event.preventDefault();
        var str = deleteProjet[_i14].id;
        var j = str.slice(12, str.lenght);
        var m = 'modalPt' + [j];
        var mod = document.getElementById(m);
        console.log(m);
        mod.style.visibility = "visible";
        var no = 'nopt' + [j];
        var non = document.getElementById(no);

        if (non) {
          non.addEventListener("click", function (event) {
            mod.style.visibility = "hidden";
          });
        }
      });
    }
  };

  for (var _i14 = 0; _i14 < deleteProjet.length; _i14++) {
    _loop3(_i14);
  }

  var _loop4 = function _loop4(_i15) {
    var str = deleteBeer[_i15].id;
    var j = str.slice(10, str.length);
    var deleteBeerM = 'deleteBeerM' + j;
    var deleteBM = document.getElementById(deleteBeerM);

    if (deleteBM) {
      deleteBM.addEventListener("click", function (event) {
        event.preventDefault();
        var m = 'modal' + [j];
        var mod = document.getElementById(m);
        mod.style.visibility = "visible";
        var no = 'noB' + [j];
        var non = document.getElementById(no);

        if (non) {
          non.addEventListener("click", function (event) {
            mod.style.visibility = "hidden";
          });
        }
      });
    }
  };

  for (var _i15 = 0; _i15 < deleteBeer.length; _i15++) {
    _loop4(_i15);
  }

  var _loop5 = function _loop5(_i16) {
    if (deleteBeer[_i16]) {
      deleteBeer[_i16].addEventListener("click", function (event) {
        event.preventDefault();
        var str = deleteBeer[_i16].id;
        var j = str.slice(10, str.length);
        var m = 'modal' + [j];
        var mod = document.getElementById(m);
        mod.style.visibility = "visible";
        var no = 'noB' + [j];
        var non = document.getElementById(no);

        if (non) {
          non.addEventListener("click", function (event) {
            mod.style.visibility = "hidden";
          });
        }
      });
    }
  };

  for (var _i16 = 0; _i16 < deleteBeer.length; _i16++) {
    _loop5(_i16);
  }

  var _loop6 = function _loop6(_i17) {
    if (deleteCategory[_i17]) {
      deleteCategory[_i17].addEventListener("click", function (event) {
        event.preventDefault();
        var str = deleteCategory[_i17].id;
        var j = str.slice(14, str.lenght);
        var m = 'modalC' + [j];
        var mod = document.getElementById(m);
        mod.style.visibility = "visible";
        var no = 'noC' + [j];
        var non = document.getElementById(no);

        if (non) {
          non.addEventListener("click", function (event) {
            mod.style.visibility = "hidden";
          });
        }
      });
    }
  };

  for (var _i17 = 0; _i17 < deleteCategory.length; _i17++) {
    _loop6(_i17);
  }

  var sum = [];

  var _loop7 = function _loop7(_i18) {
    if (stockBeer[_i18 + 1 + _i18]) {
      var _str = stockBeer[_i18 + 1 + _i18].id;

      var _j2 = _str.slice(6, _str.length);

      var abi = 'addBasInfo' + _j2;

      var _beerId2 = 'beer' + _j2;

      var _ab = document.getElementById(abi);

      var _bi = document.getElementById(_beerId2);

      if (ac3[_i18]) {
        ac3[_i18].addEventListener("click", function (event) {
          event.preventDefault();
          _ab.style.height = 0;
          _ab.innerHTML = "";
          ac3[_i18].children[0].style.visibility = "hidden";
          ac3[_i18].children[0].style.height = 0;
          addBI.pop();

          if (addBI.length == 0) {
            allBasket.classList.replace("allBasket2", "allBasket");
          }

          var m = _ab.id;
          var n = m.slice(10, m.length);
          var o = 'basAdd' + n;
          sessionStorage.removeItem(abi);
          var p = document.getElementById(o);
          p.children[0].value = "Ajouter";
          sum.splice(0, sum.length);
          var rBB2 = [];
          rBB2.push(document.getElementsByClassName("rBB"));

          for (var _l2 = 0; _l2 < rBB2[0].length; _l2++) {
            rBB2[0][_l2];
            sum.push(rBB2[0][_l2].textContent);
          }

          function sumArray() {
            var numSum = 0;

            for (var q = 0; q < sum.length; q++) {
              numSum += parseFloat(sum[q]);
            }

            return numSum;
          }

          ;

          if (rBas) {
            if (document.getElementById('formShop2')) {
              var _fs2 = document.getElementById('formShop2');

              _fs2.children[1].setAttribute('value', sumArray().toFixed(2));
            }

            rBas.value = montant + sumArray().toFixed(2) + '€';
          }

          if (sumArray() == 0) {
            if (rBas) {
              rBas.style.visibility = "hidden";
            }

            if (order) {
              order.style.visibility = "hidden";
            } else {
              order2.style.visibility = "hidden";
            }
          }
        });
      }

      if (stockBeer[_i18 + 1 + _i18]) {
        stockBeer[_i18 + 1 + _i18].addEventListener("click", function (event) {
          event.preventDefault();

          if (rBas) {
            rBas.style.visibility = "visible";
          }

          var basQuantity = document.getElementById('basQuantity');

          if (basQuantity) {
            basQuantity.value = stockBeer[_i18 * 2].value;
          }

          var rBB = [];
          rBB.push(document.getElementsByClassName("rBB"));
          sum.splice(0, sum.length);

          if (aBasket[_i18].id) {
            var _sumArray2 = function _sumArray2() {
              var numSum = 0;

              for (var q = 0; q < sum.length; q++) {
                numSum += parseFloat(sum[q]);
              }

              return numSum;
            };

            var _resultPrice = stockBeer[_i18 * 2].value * price[_i18].value;

            allBasket.classList.replace("allBasket", "allBasket2");
            var _str2 = _bi.children[0].children[0].src;
            _ab.style.height = "80px";
            _ab.innerHTML = '<img style="width: 50px;" src=' + _str2 + ' alt=""> <span class="respon14">X ' + basQuantity.value + ' = <b class="rBB">' + parseFloat(_resultPrice).toFixed(2) + "</b>€" + '</span>';

            for (var _l3 = 0; _l3 < rBB[0].length; _l3++) {
              sessionStorage.setItem(aBasket[_i18].id, aBasket[_i18].children[1].children[0].textContent);
              sum.push(rBB[0][_l3].textContent);
            }

            ;

            if (rBas) {
              if (document.getElementById('formShop2')) {
                var _fs3 = document.getElementById('formShop2');

                _fs3.children[1].setAttribute('value', _sumArray2().toFixed(2));
              }

              rBas.value = montant + _sumArray2().toFixed(2) + '€';
            }
          }

          if (_ab) {
            if (_ab.children.length == 2 && stockBeer[_i18 * 2 + 1].children[0].value == 'Ajouter') {
              addBI.push(_ab.id);
            }

            stockBeer[_i18 * 2 + 1].children[0].value = 'Modifier';
            ac3[_i18].children[0].style.visibility = "visible";

            if (order) {
              order.style.visibility = "visible";
            } else {
              order2.style.visibility = "visible";
            }

            ac3[_i18].children[0].style.height = "50px";
          }

          if (allBasket.clientWidth < 250) {
            rBas.style.width = "175px";
          }
        });
      }
    }
  };

  for (var _i18 = 0; _i18 < stockBeer.length / 2; _i18++) {
    _loop7(_i18);
  }

  console.log(sessionStorage);

  if (sessionStorage.length > 0) {
    if (menuOpen[1]) {
      var sumArray = function sumArray() {
        var numSum = 0;

        for (var q = 0; q < sum.length; q++) {
          numSum += parseFloat(sum[q]);
        }

        return numSum;
      };

      var cc = menuOpen[1].children;
      menuOpen[1].style.fontSize = "1.2em";
      cc[0].style.color = "red";
      cc[0].style.marginRight = "20px";
      panier.style.visibility = "visible";

      if (rBas) {
        rBas.style.visibility = "visible";
      }

      var rBB = [];
      rBB.push(document.getElementsByClassName("rBB"));

      for (var _i19 = 0; _i19 < aBasket.length; _i19++) {
        if (aBasket[_i19]) {
          if (sessionStorage.getItem(aBasket[_i19].id)) {
            var resultPrice = sessionStorage.getItem(aBasket[_i19].id);
            allBasket.classList.replace("allBasket", "allBasket2");
            var str = aBasket[_i19].id;
            var j = str.slice(10, str.length);
            var beerId = 'beer' + j;

            var numbeer = sessionStorage.getItem(aBasket[_i19].id) / price[_i19].value;

            var bi = document.getElementById(beerId);
            var str2 = bi.children[0].children[0].src;
            var ab = document.getElementById(aBasket[_i19].id);
            ab.style.height = "80px";
            ab.innerHTML = '<img style="width: 50px;" src=' + str2 + ' alt=""> <span class="respon14">X ' + numbeer + ' = <b class="rBB">' + parseFloat(resultPrice).toFixed(2) + "</b>€" + '</span>';

            if (ab) {
              if (stockBeer[_i19 * 2 + 1]) {
                if (ab.children.length == 2 && stockBeer[_i19 * 2 + 1].children[0].value == 'Ajouter') {
                  addBI.push(ab.id);
                }

                stockBeer[_i19 * 2 + 1].children[0].value = 'Modifier';

                if (ac3) {
                  ac3[_i19].children[0].style.visibility = "visible";
                }
              }

              if (order) {
                order.style.visibility = "visible";
              } else {
                order2.style.visibility = "visible";
              }

              if (ac3[_i19]) {
                ac3[_i19].children[0].style.height = "50px";
              }
            }

            if (allBasket.clientWidth < 250) {
              rBas.style.width = "175px";
            }
          }
        }
      }

      for (var l = 0; l < rBB[0].length; l++) {
        sum.push(rBB[0][l].textContent);
      }

      ;

      if (rBas) {
        if (document.getElementById('formShop2')) {
          var fs2 = document.getElementById('formShop2');
          fs2.children[1].setAttribute('value', sumArray().toFixed(2));
        }

        rBas.value = montant + sumArray().toFixed(2) + '€';
      }
    }
  }

  if (order2) {
    order2.addEventListener("click", function (event) {
      event.preventDefault();
      modalShop.style.visibility = "visible";
      modalShop.children[1].children[0].children[1].style.visibility = "visible";
      modalShop.children[1].children[1].children[1].style.visibility = "visible";
      modalShop.children[1].children[0].children[1].style.width = "125px";
      modalShop.children[1].children[1].children[1].style.width = "125px";
      modalShop.children[1].children[0].children[1].style.fontSize = "0.8em";
      modalShop.children[1].children[1].children[1].style.fontSize = "0.8em";
      modalShop.children[1].children[0].children[0].style.visibility = "hidden";
      modalShop.children[1].children[1].children[0].style.visibility = "hidden";
      modalShop.children[1].children[0].children[0].style.height = 0;
      modalShop.children[1].children[1].children[0].style.height = 0;
      window.addEventListener("dblclick", function (event) {
        modalShop.style.visibility = "hidden";
        modalShop.children[1].children[0].children[1].style.visibility = "hidden";
        modalShop.children[1].children[1].children[1].style.visibility = "hidden";
      });
    });
  }
  
  let checkButton = document.getElementById('checkout-button');
  
  if(checkButton){
      checkButton.addEventListener("click", function (event) {
            alert("pour le bon test paiement, le numéro de carte valide est 4242 4242 4242 4242 et pour la date MM/AA le mois et l'année en cours. merci!");
        })
      };

  var heart = document.getElementsByClassName("heart");

  if (heart) {
    for (var _i20 = 0; _i20 < heart.length; _i20++) {
      heart[_i20].addEventListener("click", function (event) {
        event.preventDefault();
        modalShop.style.visibility = "visible";
        modalShop.style.right = "10%";
        modalShop.children[1].children[0].children[0].style.bottom = "140px";
        modalShop.children[1].children[1].children[0].style.bottom = "140px";
        window.addEventListener("dblclick", function (event) {
          modalShop.style.visibility = "hidden";
        });
      });
    }
  }

  if (nB) {
    if (nB.children[0].textContent) {
      var _sumArray = function _sumArray() {
        var numSum = 0;

        for (var q = 0; q < sum.length; q++) {
          numSum += parseFloat(sum[q]);
        }

        return numSum;
      };

      rBas.style.visibility = "visible";
      var nB1 = nB.children[1].textContent;
      var kabi = 'addBasInfo' + nB1;
      var resultPrice2 = nB.children[0].textContent * nB.children[2].textContent;
      allBasket.classList.replace("allBasket", "allBasket2");
      var beerId2 = 'beer' + nB1;
      var ba = 'basAdd' + nB1;
      var dBb = 'deleteBeerBas' + nB1;
      var ab2 = document.getElementById(kabi);
      var bi2 = document.getElementById(beerId2);
      var ba2 = document.getElementById(ba);
      var db = document.getElementById(dBb);
      var str22 = bi2.children[0].children[0].src;
      ab2.style.height = "80px";
      ab2.innerHTML = '<img style="width: 50px;" src=' + str22 + ' alt=""> <span class="respon14">X ' + nB.children[0].textContent + ' = <b class="rBB">' + parseFloat(resultPrice2).toFixed(2) + "</b>€" + '</span>';
      var _rBB = [];

      _rBB.push(document.getElementsByClassName("rBB"));

      sum.splice(0, sum.length);

      for (var _l = 0; _l < _rBB[0].length; _l++) {
        sessionStorage.setItem(ab2.id, ab2.children[1].children[0].textContent);
        _rBB[0][_l];
        sum.push(_rBB[0][_l].textContent);
      }

      ;

      if (rBas) {
        if (document.getElementById('formShop2')) {
          var _fs = document.getElementById('formShop2');

          _fs.children[1].setAttribute('value', _sumArray().toFixed(2));
        }

        rBas.value = montant + _sumArray().toFixed(2) + '€';
      }

      if (ab2) {
        if (ab2.children.length == 2 && ba2.children[0].value == 'Ajouter') {
          addBI.push(ab2.id);
        }

        ba2.children[0].value = 'Modifier';
        db.children[0].style.visibility = "visible";

        if (order) {
          order.style.visibility = "visible";
        } else {
          order2.style.visibility = "visible";
        }

        db.children[0].style.height = "50px";
      }
    }
  }

  if (orderShop) {
    (function () {
      var sumOrder = [];
      var but2 = document.getElementsByClassName('sbutton2');
      but2[0].style.position = 'relative';
      but2[0].style.top = 0;

      for (var r = 1; r < orderShop.children[0].children.length - 2; r++) {
        var sumArrayOrder = function sumArrayOrder() {
          var numSumOrder = 0;

          for (var q = 0; q < sumOrder.length; q++) {
            numSumOrder += parseFloat(sumOrder[q]);
          }

          return numSumOrder;
        };

        if (orderShop.children[0].children[r].children[0].children[0]) {
          var oc = orderShop.children[0].children[r].children[0];
          oc.style.display = "none";
        }

        ;

        if (orderShop.children[0].children[r].children[0].children[1]) {
          var _oc = orderShop.children[0].children[r].children[0];
          _oc.style.height = "160px";
          _oc.style.border = '1px solid black';
          var str4 = _oc.id;

          var _j = str4.slice(10, str4.length);

          var _beerId = 'be' + _j;

          var bid = document.getElementById(_beerId);
          _oc.innerHTML += "<span class='t1 flex'><b>" + bid.children[0].textContent + "</b><b>" + bid.children[1].textContent + "</b></span>";
          _oc.style.display = "flex";
          _oc.innerHTML += "<span class='t2 flex'><b>alc%: " + bid.children[2].children[0].children[0].textContent + "</b><b>" + bid.children[2].children[1].children[0].textContent + "</b><b>prix U: " + bid.children[2].children[2].children[0].textContent + "</b><b>vol cl: " + bid.children[2].children[3].children[0].textContent + "</b></span>";
          sumOrder.push(orderShop.children[0].children[r].children[0].children[1].children[0].textContent);
        }

        ;
        var spo = document.getElementById('shop_price_order');
        spo.value = sumArrayOrder().toFixed(2);
      }

      var order = document.getElementById('order');
      order.style.visibility = "hidden";
      var alc = document.getElementById("formdetailscommande").children[0];

      for (var _r = 0; _r < (aBasket.length - 2) * 2; _r++) {
        if (aBasket[_r]) {
          if (sessionStorage.getItem(aBasket[_r].id)) {
            if (alc.children[_r * 2 + 1]) {
              alc.children[_r * 2 + 1].value = sessionStorage.getItem(aBasket[_r].id);
            }
          }

          if (alc.children[_r * 2 + 1]) {
            if (alc.children[_r * 2 + 1].value == 0) {
              alc.children[_r * 2 + 1].style.display = "none";
              alc.children[_r * 2 + 1].setAttribute("disabled", "disabled");
              alc.children[_r * 2].style.display = "none";

              alc.children[_r * 2].setAttribute("disabled", "disabled");
            }
          }
        }
      }

      var alc2 = document.getElementById("formdetailscommande").children[1];
      console.log(document.getElementById("formdetailscommande").children[0].lastElementChild);
      var alc3 = document.getElementById("formdetailscommande").children[0].lastElementChild;
      alc3.setAttribute('name', 'something');
      alc2.click();
    })();
  }

  var orderAdmin = document.getElementById("orderAdmin");

  if (orderAdmin) {
    orderAdmin.addEventListener('change', function () {
      var ppresent = document.getElementById("profilPresent");
      var index = orderAdmin.selectedIndex;
      var bsp = document.getElementsByClassName("blocSP");

      for (var s = 0; s < bsp.length; s++) {
        var ppc = ppresent.children[2].children[index];
        var ppcall = ppresent.children[2].children;

        for (var t = 0; t < ppcall.length; t++) {
          ppcall[t].style.visibility = "hidden";
          ppcall[t].style.fontSize = "0em";
        }

        if (ppc) {
          ppc.style.visibility = "visible";
          ppc.style.fontSize = "1em";
        }

        bsp[s].style.visibility = "hidden";
        bsp[s].style.position = "absolute";

        if (bsp[s].children[2].textContent == 'Statut :en cours de préparation' && index == 0) {
          bsp[s].style.visibility = "visible";
          bsp[s].style.position = "relative";
        } else if (bsp[s].children[2].textContent == 'Statut :en préparation' && index == 1) {
          bsp[s].style.visibility = "visible";
          bsp[s].style.position = "relative";
        } else if (bsp[s].children[2].textContent == "Statut :en cours d'acheminement" && index == 2) {
          bsp[s].style.visibility = "visible";
          bsp[s].style.position = "relative";
        } else if (bsp[s].children[2].textContent == "Statut :livrée" && index == 3) {
          bsp[s].style.visibility = "visible";
          bsp[s].style.position = "relative";
        }

        if (index == s) {
          ppc.style.visibility = "visible";
          ppc.style.fontSize = "1em";
        }
      }
    });
  }
      window.onpopstate = function() {
        alert("retour?");
        location.href = "https://www.brasseriesauvage.online/?animation=non&arrow=down";
        console.log(location.href);
     }; history.pushState({}, '');
});

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");
 // Registers Stimulus controllers from controllers.json and in the controllers/ directory

var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$")); // register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_from_js-node_modules_core-js_modules_es_array_i-fda9bb","vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_core-js_modules_es_ar-8fa83a","assets_styles_app_css-assets_styles_app_css"], () => (__webpack_exec__("./assets/appOther.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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NkcsUUFBYixHQUF3QixVQUF4QjtRQUNILENBSEssTUFHQSxJQUFHaUIsR0FBRyxDQUFDQyxDQUFELENBQUgsQ0FBT3JJLFFBQVAsQ0FBZ0IsQ0FBaEIsRUFBbUJ0QyxXQUFuQixJQUFrQyxpQ0FBbEMsSUFBdUV3SyxLQUFLLElBQUksQ0FBbkYsRUFBcUY7VUFDdkZFLEdBQUcsQ0FBQ0MsQ0FBRCxDQUFILENBQU8vSCxLQUFQLENBQWE4QixVQUFiLEdBQTBCLFNBQTFCO1VBQ0FnRyxHQUFHLENBQUNDLENBQUQsQ0FBSCxDQUFPL0gsS0FBUCxDQUFhNkcsUUFBYixHQUF3QixVQUF4QjtRQUNILENBSEssTUFHQSxJQUFHaUIsR0FBRyxDQUFDQyxDQUFELENBQUgsQ0FBT3JJLFFBQVAsQ0FBZ0IsQ0FBaEIsRUFBbUJ0QyxXQUFuQixJQUFrQyxnQkFBbEMsSUFBc0R3SyxLQUFLLElBQUksQ0FBbEUsRUFBb0U7VUFDdEVFLEdBQUcsQ0FBQ0MsQ0FBRCxDQUFILENBQU8vSCxLQUFQLENBQWE4QixVQUFiLEdBQTBCLFNBQTFCO1VBQ0pnRyxHQUFHLENBQUNDLENBQUQsQ0FBSCxDQUFPL0gsS0FBUCxDQUFhNkcsUUFBYixHQUF3QixVQUF4QjtRQUFvQzs7UUFDcEMsSUFBR2UsS0FBSyxJQUFJRyxDQUFaLEVBQWM7VUFDVkMsR0FBRyxDQUFDaEksS0FBSixDQUFVOEIsVUFBVixHQUF1QixTQUF2QjtVQUNBa0csR0FBRyxDQUFDaEksS0FBSixDQUFVSSxRQUFWLEdBQXFCLEtBQXJCO1FBQTRCO01BQy9CO0lBQ0osQ0EvQkQ7RUFnQ0g7QUFFSixDQTltQkQ7Ozs7Ozs7Ozs7Ozs7Ozs7Q0NiQTs7QUFDTyxJQUFNZ0ksR0FBRyxHQUFHRCwwRUFBZ0IsQ0FBQ0UseUlBQUQsQ0FBNUIsRUFNUDtBQUNBOzs7Ozs7Ozs7Ozs7QUNWQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8gXFwuW2p0XXN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy5qc29uIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hcHBPdGhlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvYm9vdHN0cmFwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLmNzcz8zZmJhIl0sInNvdXJjZXNDb250ZW50IjpbInZhciBtYXAgPSB7XG5cdFwiLi9oZWxsb19jb250cm9sbGVyLmpzXCI6IFwiLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qc1wiXG59O1xuXG5cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0KHJlcSkge1xuXHR2YXIgaWQgPSB3ZWJwYWNrQ29udGV4dFJlc29sdmUocmVxKTtcblx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oaWQpO1xufVxuZnVuY3Rpb24gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSkge1xuXHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1hcCwgcmVxKSkge1xuXHRcdHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICdcIiArIHJlcSArIFwiJ1wiKTtcblx0XHRlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7XG5cdFx0dGhyb3cgZTtcblx0fVxuXHRyZXR1cm4gbWFwW3JlcV07XG59XG53ZWJwYWNrQ29udGV4dC5rZXlzID0gZnVuY3Rpb24gd2VicGFja0NvbnRleHRLZXlzKCkge1xuXHRyZXR1cm4gT2JqZWN0LmtleXMobWFwKTtcbn07XG53ZWJwYWNrQ29udGV4dC5yZXNvbHZlID0gd2VicGFja0NvbnRleHRSZXNvbHZlO1xubW9kdWxlLmV4cG9ydHMgPSB3ZWJwYWNrQ29udGV4dDtcbndlYnBhY2tDb250ZXh0LmlkID0gXCIuL2Fzc2V0cy9jb250cm9sbGVycyBzeW5jIHJlY3Vyc2l2ZSAuL25vZGVfbW9kdWxlcy9Ac3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlci5qcyEgXFxcXC5banRdc3g/JFwiOyIsImV4cG9ydCBkZWZhdWx0IHtcbn07IiwiaW1wb3J0IHsgQ29udHJvbGxlciB9IGZyb20gJ0Bob3R3aXJlZC9zdGltdWx1cyc7XG5cbi8qXG4gKiBUaGlzIGlzIGFuIGV4YW1wbGUgU3RpbXVsdXMgY29udHJvbGxlciFcbiAqXG4gKiBBbnkgZWxlbWVudCB3aXRoIGEgZGF0YS1jb250cm9sbGVyPVwiaGVsbG9cIiBhdHRyaWJ1dGUgd2lsbCBjYXVzZVxuICogdGhpcyBjb250cm9sbGVyIHRvIGJlIGV4ZWN1dGVkLiBUaGUgbmFtZSBcImhlbGxvXCIgY29tZXMgZnJvbSB0aGUgZmlsZW5hbWU6XG4gKiBoZWxsb19jb250cm9sbGVyLmpzIC0+IFwiaGVsbG9cIlxuICpcbiAqIERlbGV0ZSB0aGlzIGZpbGUgb3IgYWRhcHQgaXQgZm9yIHlvdXIgdXNlIVxuICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xuICAgIGNvbm5lY3QoKSB7XG4gICAgICAgIHRoaXMuZWxlbWVudC50ZXh0Q29udGVudCA9ICdIZWxsbyBTdGltdWx1cyEgRWRpdCBtZSBpbiBhc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyc7XG4gICAgfVxufVxuIiwiLypcclxuKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbipcclxuKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcclxuXHJcbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxyXG5pbXBvcnQgJy4vYm9vdHN0cmFwJztcclxuXHJcbi8qKioqKioqKioqIGNoYXJnZW1lbnQgZGUgbGEgcGFnZSBqcyAqL1xyXG5cclxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2xvYWQnLCAoZXZlbnQpID0+IHtcclxuXHJcbiAgICBsZXQgYnV0dG9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJidXR0b25cIik7XHJcbiAgICBsZXQgYnV0dG9uMyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJidXR0b25cIik7XHJcbiAgICBsZXQgaDEgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImgxXCIpO1xyXG4gICAgbGV0IG1jID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcIm1vZGlmQ29udGFjdFwiKTtcclxuICAgIGxldCBtcCA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJtb2RpZlByb2pldFwiKTtcclxuICAgIGxldCBzQiA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJzcGFjZUJhc2tldFwiKTtcclxuICAgIGxldCBzQjIgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwic3BhY2VCYXNrZXQyXCIpO1xyXG4gICAgbGV0IHNCMyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJzcGFjZUJhc2tldDNcIik7XHJcbiAgICBsZXQgcDUgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwicG91cjVcIik7XHJcbiAgICBsZXQgcDU1ID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcInA1NVwiKTtcclxuICAgIGxldCBhbGxCYXNrZXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYWxsQmFza2V0Jyk7XHJcbiAgICBsZXQgb3JkZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnb3JkZXInKTtcclxuICAgIGxldCBvcmRlcjIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnb3JkZXIyJyk7XHJcbiAgICBsZXQgcmVzcG9uMTQgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdyZXNwb24xNCcpO1xyXG4gICAgbGV0IHJCYXMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInJlc3VsdEJhc2tldFwiKTtcclxuICAgIGxldCBzdG9ja0JlZXIgPSBbXTtwb3U1XHJcbiAgICBsZXQgcHJpY2UgPSBbXTtcclxuICAgIGxldCB2YWx1ZVByaWNlID0gW107XHJcbiAgICBsZXQgdmFsdWVQUmVzdWx0ID0gW107XHJcbiAgICBsZXQgZGVsZXRlQmVlciA9IFtdO1xyXG4gICAgbGV0IGRlbGV0ZUNhdGVnb3J5ID0gW107XHJcbiAgICBsZXQgZGVsZXRlQ29udGFjdCA9IFtdO1xyXG4gICAgbGV0IGRlbGV0ZVByb2pldCA9IFtdO1xyXG4gICAgbGV0IGFCYXNrZXQgPSBbXTtcclxuICAgIGxldCBhYzMgPSBbXTtcclxuICAgIGxldCBhZGRCSSA9IFtdO1xyXG4gICAgbGV0IHBvdTUgPSBbXTtcclxuICAgIGxldCBtb250YW50ID0gXCJUb3RhbCA9IFwiO1xyXG4gICAgZm9yKCBsZXQgaT0wOyBpPHNCLmxlbmd0aDsgaSsrKXtcclxuICAgICAgICBzdG9ja0JlZXIucHVzaChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChzQltpXS5jaGlsZHJlblswXS5pZCkpO31cclxuICAgIGZvciggbGV0IGk9MDsgaTxzQjIubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgIHByaWNlLnB1c2goZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoc0IyW2ldLmNoaWxkcmVuWzFdLmlkKSk7fVxyXG4gICAgZm9yKCBsZXQgaT0wOyBpPHNCMy5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgdmFsdWVQcmljZS5wdXNoKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNCM1tpXS5jaGlsZHJlblswXS5pZCkpO1xyXG4gICAgICAgIHZhbHVlUFJlc3VsdC5wdXNoKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHNCM1tpXS5jaGlsZHJlblsxXS5pZCkpO31cclxuICAgIGZvciggbGV0IGk9MDsgaTxwNS5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgZGVsZXRlQmVlci5wdXNoKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKHA1W2ldLmNoaWxkcmVuWzFdLmlkKSk7fVxyXG4gICAgZm9yKCBsZXQgaT0wOyBpPHA1NS5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgZGVsZXRlQ2F0ZWdvcnkucHVzaChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChwNTVbaV0uY2hpbGRyZW5bMl0uaWQpKTt9XHJcbiAgICBmb3IoIGxldCBpPTE7IGk8bWMubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgIGRlbGV0ZUNvbnRhY3QucHVzaChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChtY1tpXS5jaGlsZHJlblszXS5pZCkpO31cclxuICAgIGZvciggbGV0IGk9MDsgaTxtcC5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgZGVsZXRlUHJvamV0LnB1c2goZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobXBbaV0uY2hpbGRyZW5bMF0uaWQpKTt9XHJcbiAgICBsZXQgYm9keSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJib2R5XCIpO1xyXG4gICAgaWYoYWxsQmFza2V0KXtcclxuICAgICAgICBmb3IoIGxldCBpPTE7IGk8YWxsQmFza2V0LmNoaWxkcmVuLmxlbmd0aDsgaSsrKXtcclxuICAgICAgICAgICAgaWYoYWxsQmFza2V0LmNoaWxkcmVuW2ldLmNoaWxkcmVuWzBdKXtcclxuICAgICAgICAgICAgICAgIGFCYXNrZXQucHVzaChkb2N1bWVudC5nZXRFbGVtZW50QnlJZChhbGxCYXNrZXQuY2hpbGRyZW5baV0uY2hpbGRyZW5bMF0uaWQpKTt9XHJcbiAgICAgICAgICAgIGlmKGFsbEJhc2tldC5jaGlsZHJlbltpXS5jaGlsZHJlblsxXSl7XHJcbiAgICAgICAgICAgICAgICBwb3U1LnB1c2goYWxsQmFza2V0LmNoaWxkcmVuW2ldLmNoaWxkcmVuWzFdKTt9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICBpZihzdG9ja0JlZXIpe1xyXG4gICAgICAgICAgICBmb3IoIGxldCBpPTA7IGk8c3RvY2tCZWVyLmxlbmd0aC8yOyBpKyspe1xyXG4gICAgICAgICAgICAgICAgYWMzLnB1c2goYWxsQmFza2V0LmNoaWxkcmVuW2krMV0uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF0pO31cclxuICAgICAgICB9XHJcbiAgICAgICAgZnVuY3Rpb24gY2xpZW50V2lkdGgoKXtcclxuICAgICAgICAgICAgZm9yKCBsZXQgaz0wOyBrPHJlc3BvbjE0Lmxlbmd0aDsgaysrKXtcclxuICAgICAgICAgICAgICAgIGlmKGFsbEJhc2tldC5jbGllbnRXaWR0aDwyNTApe1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKHJCYXMpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByQmFzLnN0eWxlLndpZHRoID0gXCIxNzVweFwiO31cclxuICAgICAgICAgICAgICAgICAgICByZXNwb24xNFtrXS5zdHlsZS53aWR0aCA9IFwiMTAwcHhcIjtcclxuICAgICAgICAgICAgICAgICAgICByZXNwb24xNFtrXS5zdHlsZS5ib3R0b20gPSAnNjBweCc7XHJcbiAgICAgICAgICAgICAgICAgICAgcmVzcG9uMTRba10uc3R5bGUubGVmdCA9IFwiNTVweFwiO1xyXG4gICAgICAgICAgICAgICAgICAgIHJlc3BvbjE0W2tdLnN0eWxlLmZvbnRTaXplID0gXCIwLjllbVwiO1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKHBvdTUpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBmb3IoIGxldCBxPTA7IHE8cG91NS5sZW5ndGg7IHErKyl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZihwb3U1W3FdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzBdKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwb3U1W3FdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzBdLnN0eWxlLnBhZGRpbmcgPSBcIjAgMCAwIDIwcHhcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9ZWxzZXtcclxuICAgICAgICAgICAgICAgICAgICBpZihyQmFzKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHdpbmRvdy5tYXRjaE1lZGlhKFwiKG1heC13aWR0aDogNDAwcHgpXCIpLm1hdGNoZXMpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJCYXMuc3R5bGUud2lkdGggPSBcIjI5MHB4XCI7fVxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbHNle3JCYXMuc3R5bGUud2lkdGggPSBcIjM3NXB4XCI7fVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICBpZiAod2luZG93Lm1hdGNoTWVkaWEoXCIobWF4LXdpZHRoOiA0MDBweClcIikubWF0Y2hlcykge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByZXNwb24xNFtrXS5zdHlsZS53aWR0aCA9IFwiMTY1cHhcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgZWxzZXtyZXNwb24xNFtrXS5zdHlsZS53aWR0aCA9IFwiMTc1cHhcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgcmVzcG9uMTRba10uc3R5bGUuYm90dG9tID0gJzMwcHgnO1xyXG4gICAgICAgICAgICAgICAgICAgIHJlc3BvbjE0W2tdLnN0eWxlLmxlZnQgPSAnMCc7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYgKHdpbmRvdy5tYXRjaE1lZGlhKFwiKG1heC13aWR0aDogNDAwcHgpXCIpLm1hdGNoZXMpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgcmVzcG9uMTRba10uc3R5bGUuZm9udFNpemUgPSBcIjAuOWVtXCI7fVxyXG4gICAgICAgICAgICAgICAgICAgIGVsc2V7cmVzcG9uMTRba10uc3R5bGUuZm9udFNpemUgPSBcIjEuMWVtXCI7fVxyXG5cclxuICAgICAgICAgICAgICAgICAgICBpZihwb3U1KXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgZm9yKCBsZXQgcT0wOyBxPHBvdTUubGVuZ3RoOyBxKyspe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYocG91NVtxXS5jaGlsZHJlblswXS5jaGlsZHJlblswXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcG91NVtxXS5jaGlsZHJlblswXS5jaGlsZHJlblswXS5zdHlsZS5wYWRkaW5nID0gMDt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgc2V0SW50ZXJ2YWwoY2xpZW50V2lkdGgsIDEwMClcclxuICAgIH1cclxuICAgIGxldCBmb290ZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9vdGVyJyk7XHJcbiAgICBsZXQgbWVudUltZyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZW51SW1nJyk7XHJcbiAgICBsZXQgZlRvcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmVG9wJyk7XHJcbiAgICBsZXQgYXJyb3cyID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcImFycm93MlwiKTtcclxuICAgIGxldCBoaWRlID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcImhpZGVcIik7XHJcbiAgICBsZXQgbkIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm5ld0JcIik7XHJcbiAgICBsZXQgbWVudU9wZW4gPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwibWVudU9wZW5cIik7XHJcbiAgICBsZXQgcGFuaWVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwYW5pZXJcIik7XHJcbiAgICBsZXQgbW9kYWxTaG9wID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtb2RhbFNob3BcIik7XHJcbiAgICBsZXQgb3JkZXJTaG9wID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJvcmRlclNob3BcIik7XHJcbiAgICBsZXQgZXJyb3JTaG9wID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Vycm9yU2hvcCcpO1xyXG4gICAgbGV0IGJ1dHRvblByb2ZpbCA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ2hlbGxvQnV0dG9uJyk7XHJcbiAgICBsZXQgYnV0dG9uSW1nMSA9IGJ1dHRvbi5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5jaGlsZHJlblswXTtcclxuICAgIGlmKGJ1dHRvbi5jaGlsZHJlblsxXS5jaGlsZHJlblsxXSl7XHJcbiAgICAgICAgbGV0IGJ1dHRvbkltZzIgPSBidXR0b24uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF07XHJcbiAgICAgICAgICAgIGJ1dHRvbkltZzIuc3R5bGUuaGVpZ2h0PSBcIjMwcHhcIjt9XHJcbiAgICBpZihidXR0b25Qcm9maWxbMF0pe1xyXG4gICAgICAgIGJ1dHRvblByb2ZpbFswXS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7fVxyXG4gICAgaWYoZXJyb3JTaG9wKXtcclxuICAgICAgIHNlc3Npb25TdG9yYWdlLmNsZWFyKCk7fVxyXG4gICAgbGV0IHN1Y2Nlc3NTaG9wID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3N1Y2Nlc3NTaG9wJylcclxuICAgIGlmKHN1Y2Nlc3NTaG9wKXtcclxuICAgICAgIHNlc3Npb25TdG9yYWdlLmNsZWFyKCk7fVxyXG4gICAgaWYoYnV0dG9uKXtcclxuICAgICAgICBidXR0b25JbWcxLnN0eWxlLmhlaWdodD0gXCIzMHB4XCI7XHJcbiAgICAgICAgYnV0dG9uLnN0eWxlLnRleHRBbGlnbiA9IFwiY2VudGVyXCI7XHJcbiAgICAgICAgYnV0dG9uLnN0eWxlLmxlZnQgPSBcIjMyJVwiO1xyXG4gICAgICAgIGJ1dHRvbi5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgYnV0dG9uLnN0eWxlLnRvcCA9IFwiLTEzMXB4XCI7XHJcbiAgICAgICAgYnV0dG9uLnN0eWxlLmRpc3BsYXkgPSBcImZsZXhcIjtcclxuICAgICAgICBidXR0b24uc3R5bGUud2lkdGggPSBcIjI1JVwiO31cclxuICAgIGJ1dHRvbjNbMF0uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgZm9yKCBsZXQgaT0xOyBpPDM7IGkrKyl7XHJcbiAgICAgICAgaWYoYnV0dG9uM1tpXSl7XHJcbiAgICAgICAgICAgIGJ1dHRvbjNbaV0uc3R5bGUubWFyZ2luID0gXCIxMHB4IDVweFwiO1xyXG4gICAgICAgICAgICBidXR0b24zW2ldLnN0eWxlLmZvbnRTaXplID0gXCIwLjdlbVwiO1xyXG4gICAgICAgICAgICBidXR0b24zW2ldLnN0eWxlLnRyYW5zaXRpb24gPSBcImFsbCAwc1wiO1xyXG4gICAgICAgICAgICBidXR0b24zW2ldLnN0eWxlLmJveFNoYWRvdyA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgICBidXR0b24zW2ldLnN0eWxlLnRyYW5zaXRpb24gPSBcIm5vbmVcIjtcclxuICAgICAgICAgICAgYnV0dG9uM1tpXS5zdHlsZS5ib3JkZXJSYWRpdXMgPSBcIjBcIjtcclxuICAgICAgICAgICAgYnV0dG9uM1tpXS5zdHlsZS5ib3JkZXIgPSBcIjFweCBzb2xpZCByZ2IoMjQ2LCA5NywgMTUpXCI7fVxyXG4gICAgfVxyXG4gICAgaDEuc3R5bGUuYW5pbWF0aW9uID0gJ25vbmUnO1xyXG4gICAgaDEuc3R5bGUub3BhY2l0eSA9IDE7XHJcbiAgICBtZW51LnN0eWxlLm9wYWNpdHkgPSAxO1xyXG4gICAgbWVudS5zdHlsZS50cmFuc2l0aW9uID0gXCJub25lIDBzXCI7XHJcbiAgICBtZW51SW1nLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcclxuICAgIGJvZHkuc3R5bGUuYmFja2dyb3VuZCA9IFwibGluZWFyLWdyYWRpZW50KHdoaXRlLCByZ2IoMjM3LCAxNzUsIDUwLCAwLjUpKVwiO1xyXG4gICAgYm9keS5zdHlsZS5wYWRkaW5nQm90dG9tID0gMDtcclxuICAgIGZvb3Rlci5zdHlsZS5tYXJnaW5Ub3AgPSAnMHB4JztcclxuICAgIGZUb3Auc3R5bGUudmlzaWJpbGl0eSA9ICd2aXNpYmxlJztcclxuICAgIGZvcihjb25zdCBhcnIgb2YgYXJyb3cyKXtcclxuICAgICAgICBhcnIuY2xhc3NMaXN0LnJlcGxhY2UoXCJhcnJvdzJcIiwgXCJhcnJvd1wiKTt9XHJcbiAgICBmb3IoY29uc3QgaGlkIG9mIGhpZGUpe1xyXG4gICAgICAgIGhpZC5jbGFzc0xpc3QucmVwbGFjZShcImhpZGVcIiwgXCJ2SGlkZGVuXCIpO31cclxuICAgIGZvciggbGV0IGk9MDsgaTxhYzMubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgIGFjM1tpXS5jaGlsZHJlblswXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjtcclxuICAgICAgICBhYzNbaV0uY2hpbGRyZW5bMF0uc3R5bGUuaGVpZ2h0ID0gMDtcclxuICAgICAgICBwb3U1W2ldLnN0eWxlLmhlaWdodCA9ICcwcHgnO31cclxuICAgIGZvciggbGV0IGk9MDsgaTx2YWx1ZVByaWNlLmxlbmd0aDsgaSsrKXtcclxuICAgICAgICBpZih2YWx1ZVByaWNlW2ldKXtcclxuICAgICAgICAgICAgdmFsdWVQUmVzdWx0W2ldLmlubmVySFRNTCA9IHZhbHVlUHJpY2VbaV0udmFsdWU7fVxyXG4gICAgfVxyXG4gICAgaWYoYWxsQmFza2V0KXtcclxuICAgICAgICBhbGxCYXNrZXQuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO31cclxuXHJcbiAgICBsZXQgc3AgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNob3BQcmVzZW50XCIpO1xyXG4gICAgaWYoc3Ape1xyXG4gICAgICAgIGlmKHNwLmNoaWxkcmVuWzJdLmNoaWxkcmVuWzBdKXtcclxuICAgICAgICAgICAgc3AuY2hpbGRyZW5bMl0uc3R5bGUuaGVpZ2h0ID0gMDtcclxuICAgICAgICAgICAgc3AuY2hpbGRyZW5bMl0uc3R5bGUucGFkZGluZ1RvcCA9IFwiMTE0cHhcIjt9fVxyXG5cclxuICAgIGZvciggbGV0IGk9MDsgaTxzdG9ja0JlZXIubGVuZ3RoLzI7IGkrKyl7XHJcbiAgICAgICAgaWYoc3RvY2tCZWVyW2kqMl0pe1xyXG4gICAgICAgICAgICBzdG9ja0JlZXJbaSoyXS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgICAgICAgICBsZXQgcmVzdWx0UHJpY2UgPSBzdG9ja0JlZXJbaSoyXS52YWx1ZSAqIHByaWNlW2ldLnZhbHVlO1xyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2codmFsdWVQcmljZVtpXS52YWx1ZSk7XHJcbiAgICAgICAgICAgICAgICB2YWx1ZVByaWNlW2ldLnZhbHVlID0gcGFyc2VGbG9hdChyZXN1bHRQcmljZSkudG9GaXhlZCgyKTtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKHZhbHVlUHJpY2VbaV0udmFsdWUpO1xyXG4gICAgICAgICAgICAgICAgdmFsdWVQUmVzdWx0W2ldLmlubmVySFRNTCA9IHBhcnNlRmxvYXQocmVzdWx0UHJpY2UpLnRvRml4ZWQoMikgKyBcIuKCrFwiO31cclxuICAgICAgICAgICAgKVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBmb3IoIGxldCBpPTA7IGk8ZGVsZXRlQ29udGFjdC5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgaWYoZGVsZXRlQ29udGFjdFtpXSl7XHJcbiAgICAgICAgICAgIGRlbGV0ZUNvbnRhY3RbaV0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgICAgIGxldCBzdHIgPSBkZWxldGVDb250YWN0W2ldLmlkO1xyXG4gICAgICAgICAgICAgICAgbGV0IGogPSBzdHIuc2xpY2UoMTMsIHN0ci5sZW5naHQpO1xyXG4gICAgICAgICAgICAgICAgbGV0IG0gPSAnbW9kYWxDdCcgKyBbal07XHJcbiAgICAgICAgICAgICAgICBsZXQgbW9kID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobSk7XHJcbiAgICAgICAgICAgICAgICAgICAgbW9kLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcclxuICAgICAgICAgICAgICAgICAgICBsZXQgbm8gPSAnbm9jdCcgKyBbal07XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IG5vbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vKTtcclxuICAgICAgICAgICAgICAgICAgICBpZihub24pe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBub24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSlcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgZm9yKCBsZXQgaT0wOyBpPGRlbGV0ZVByb2pldC5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgaWYoZGVsZXRlUHJvamV0W2ldKXtcclxuICAgICAgICAgICAgZGVsZXRlUHJvamV0W2ldLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZlbnQpID0+IHtcclxuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICAgICBsZXQgc3RyID0gZGVsZXRlUHJvamV0W2ldLmlkO1xyXG4gICAgICAgICAgICAgICAgbGV0IGogPSBzdHIuc2xpY2UoMTIsIHN0ci5sZW5naHQpO1xyXG4gICAgICAgICAgICAgICAgbGV0IG0gPSAnbW9kYWxQdCcgKyBbal07XHJcbiAgICAgICAgICAgICAgICBsZXQgbW9kID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobSk7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhtKTtcclxuICAgICAgICAgICAgICAgICAgICBtb2Quc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO1xyXG4gICAgICAgICAgICAgICAgICAgIGxldCBubyA9ICdub3B0JyArIFtqXTtcclxuICAgICAgICAgICAgICAgICAgICBsZXQgbm9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobm8pO1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKG5vbil7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIG5vbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2Quc3R5bGUudmlzaWJpbGl0eSA9IFwiaGlkZGVuXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBmb3IoIGxldCBpPTA7IGk8ZGVsZXRlQmVlci5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgbGV0IHN0ciA9IGRlbGV0ZUJlZXJbaV0uaWQ7XHJcbiAgICAgICAgbGV0IGogPSBzdHIuc2xpY2UoMTAsIHN0ci5sZW5ndGgpO1xyXG4gICAgICAgIGxldCBkZWxldGVCZWVyTSA9ICdkZWxldGVCZWVyTScrajtcclxuICAgICAgICBsZXQgZGVsZXRlQk0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChkZWxldGVCZWVyTSlcclxuICAgICAgICBpZihkZWxldGVCTSl7XHJcbiAgICAgICAgICAgIGRlbGV0ZUJNLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZlbnQpID0+IHtcclxuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICAgICBsZXQgbSA9ICdtb2RhbCcgKyBbal07XHJcbiAgICAgICAgICAgICAgICBsZXQgbW9kID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobSk7XHJcbiAgICAgICAgICAgICAgICAgICAgbW9kLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcclxuICAgICAgICAgICAgICAgICAgICBsZXQgbm8gPSAnbm9CJyArIFtqXTtcclxuICAgICAgICAgICAgICAgICAgICBsZXQgbm9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobm8pO1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKG5vbil7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIG5vbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2Quc3R5bGUudmlzaWJpbGl0eSA9IFwiaGlkZGVuXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBmb3IoIGxldCBpPTA7IGk8ZGVsZXRlQmVlci5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgaWYoZGVsZXRlQmVlcltpXSl7XHJcbiAgICAgICAgICAgIGRlbGV0ZUJlZXJbaV0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgICAgIGxldCBzdHIgPSBkZWxldGVCZWVyW2ldLmlkO1xyXG4gICAgICAgICAgICAgICAgbGV0IGogPSBzdHIuc2xpY2UoMTAsIHN0ci5sZW5ndGgpO1xyXG4gICAgICAgICAgICAgICAgbGV0IG0gPSAnbW9kYWwnICsgW2pdO1xyXG4gICAgICAgICAgICAgICAgbGV0IG1vZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG0pO1xyXG4gICAgICAgICAgICAgICAgICAgIG1vZC5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IG5vID0gJ25vQicgKyBbal07XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IG5vbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vKTtcclxuICAgICAgICAgICAgICAgICAgICBpZihub24pe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBub24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSlcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgZm9yKCBsZXQgaT0wOyBpPGRlbGV0ZUNhdGVnb3J5Lmxlbmd0aDsgaSsrKXtcclxuICAgICAgICBpZihkZWxldGVDYXRlZ29yeVtpXSl7XHJcbiAgICAgICAgICAgIGRlbGV0ZUNhdGVnb3J5W2ldLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZlbnQpID0+IHtcclxuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICAgICBsZXQgc3RyID0gZGVsZXRlQ2F0ZWdvcnlbaV0uaWQ7XHJcbiAgICAgICAgICAgICAgICBsZXQgaiA9IHN0ci5zbGljZSgxNCwgc3RyLmxlbmdodCk7XHJcbiAgICAgICAgICAgICAgICBsZXQgbSA9ICdtb2RhbEMnICsgW2pdO1xyXG4gICAgICAgICAgICAgICAgbGV0IG1vZCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG0pO1xyXG4gICAgICAgICAgICAgICAgICAgIG1vZC5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IG5vID0gJ25vQycgKyBbal07XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IG5vbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG5vKTtcclxuICAgICAgICAgICAgICAgICAgICBpZihub24pe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBub24uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbW9kLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSlcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgbGV0IHN1bSA9IFtdO1xyXG4gICAgZm9yKCBsZXQgaT0wOyBpPHN0b2NrQmVlci5sZW5ndGgvMjsgaSsrKXtcclxuICAgICAgICBpZihzdG9ja0JlZXJbaSsxK2ldKXtcclxuICAgICAgICAgICAgbGV0IHN0ciA9IHN0b2NrQmVlcltpKzEraV0uaWQ7XHJcbiAgICAgICAgICAgIGxldCBqID0gc3RyLnNsaWNlKDYsIHN0ci5sZW5ndGgpO1xyXG4gICAgICAgICAgICBsZXQgYWJpID0gJ2FkZEJhc0luZm8nICsgajtcclxuICAgICAgICAgICAgbGV0IGJlZXJJZCA9ICdiZWVyJyArIGo7XHJcbiAgICAgICAgICAgIGxldCBhYiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGFiaSk7XHJcbiAgICAgICAgICAgIGxldCBiaSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGJlZXJJZCk7XHJcbiAgICAgICAgICAgIGlmKGFjM1tpXSl7XHJcbiAgICAgICAgICAgICAgICBhYzNbaV0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICAgICAgICAgYWIuc3R5bGUuaGVpZ2h0ID0gMDtcclxuICAgICAgICAgICAgICAgICAgICBhYi5pbm5lckhUTUwgPSAgXCJcIjtcclxuICAgICAgICAgICAgICAgICAgICBhYzNbaV0uY2hpbGRyZW5bMF0uc3R5bGUudmlzaWJpbGl0eSA9IFwiaGlkZGVuXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgYWMzW2ldLmNoaWxkcmVuWzBdLnN0eWxlLmhlaWdodCA9IDA7XHJcbiAgICAgICAgICAgICAgICAgICAgYWRkQkkucG9wKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYoYWRkQkkubGVuZ3RoID09IDApe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBhbGxCYXNrZXQuY2xhc3NMaXN0LnJlcGxhY2UoXCJhbGxCYXNrZXQyXCIsIFwiYWxsQmFza2V0XCIpO31cclxuICAgICAgICAgICAgICAgICAgICBsZXQgbSA9IGFiLmlkO1xyXG4gICAgICAgICAgICAgICAgICAgIGxldCBuID0gbS5zbGljZSgxMCwgbS5sZW5ndGgpO1xyXG4gICAgICAgICAgICAgICAgICAgIGxldCBvID0gJ2Jhc0FkZCcgKyBuO1xyXG4gICAgICAgICAgICAgICAgICAgIHNlc3Npb25TdG9yYWdlLnJlbW92ZUl0ZW0oYWJpKTtcclxuICAgICAgICAgICAgICAgICAgICBsZXQgcCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKG8pO1xyXG4gICAgICAgICAgICAgICAgICAgIHAuY2hpbGRyZW5bMF0udmFsdWUgPSBcIkFqb3V0ZXJcIjtcclxuICAgICAgICAgICAgICAgICAgICBzdW0uc3BsaWNlKDAsIHN1bS5sZW5ndGgpXHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IHJCQjIgPSBbXTtcclxuICAgICAgICAgICAgICAgICAgICByQkIyLnB1c2goZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcInJCQlwiKSk7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9yKCBsZXQgbD0wOyBsPHJCQjJbMF0ubGVuZ3RoOyBsKyspe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByQkIyWzBdW2xdO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBzdW0ucHVzaChyQkIyWzBdW2xdLnRleHRDb250ZW50KTt9XHJcbiAgICAgICAgICAgICAgICAgICAgZnVuY3Rpb24gc3VtQXJyYXkoKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IG51bVN1bSA9IDA7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGZvciAobGV0IHE9MCA7IHE8c3VtLmxlbmd0aCA7IHErKyl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBudW1TdW0gKz0gcGFyc2VGbG9hdChzdW1bcV0pO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIG51bVN1bTt9O1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKHJCYXMpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBpZihkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybVNob3AyJykpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGZzMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtU2hvcDInKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZzMi5jaGlsZHJlblsxXS5zZXRBdHRyaWJ1dGUoJ3ZhbHVlJywgc3VtQXJyYXkoKS50b0ZpeGVkKDIpKTt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHJCYXMudmFsdWUgPSBtb250YW50ICsgc3VtQXJyYXkoKS50b0ZpeGVkKDIpICsgJ+KCrCc7fVxyXG4gICAgICAgICAgICAgICAgICAgIGlmKHN1bUFycmF5KCkgPT0gMCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmKHJCYXMpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgckJhcy5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmKG9yZGVyKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9yZGVyLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwifVxyXG4gICAgICAgICAgICAgICAgICAgICAgICBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9yZGVyMi5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgICAgIH0pXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgaWYoc3RvY2tCZWVyW2krMStpXSl7XHJcbiAgICAgICAgICAgICAgICBzdG9ja0JlZXJbaSsxK2ldLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoZXZlbnQpID0+IHtcclxuICAgICAgICAgICAgICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgICAgICAgICAgICAgIGlmKHJCYXMpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICByQmFzLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IGJhc1F1YW50aXR5ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Jhc1F1YW50aXR5Jyk7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYoYmFzUXVhbnRpdHkpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBiYXNRdWFudGl0eS52YWx1ZSA9IHN0b2NrQmVlcltpKjJdLnZhbHVlO31cclxuICAgICAgICAgICAgICAgICAgICBsZXQgckJCID0gW107XHJcbiAgICAgICAgICAgICAgICAgICAgckJCLnB1c2goZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcInJCQlwiKSk7XHJcbiAgICAgICAgICAgICAgICAgICAgc3VtLnNwbGljZSgwLCBzdW0ubGVuZ3RoKVxyXG4gICAgICAgICAgICAgICAgICAgICAgICBpZihhQmFza2V0W2ldLmlkKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGxldCByZXN1bHRQcmljZSA9IHN0b2NrQmVlcltpKjJdLnZhbHVlICogcHJpY2VbaV0udmFsdWU7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhbGxCYXNrZXQuY2xhc3NMaXN0LnJlcGxhY2UoXCJhbGxCYXNrZXRcIiwgXCJhbGxCYXNrZXQyXCIpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHN0cjIgPSBiaS5jaGlsZHJlblswXS5jaGlsZHJlblswXS5zcmM7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBhYi5zdHlsZS5oZWlnaHQgPSBcIjgwcHhcIjtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFiLmlubmVySFRNTCA9ICAnPGltZyBzdHlsZT1cIndpZHRoOiA1MHB4O1wiIHNyYz0nICsgc3RyMiArICcgYWx0PVwiXCI+IDxzcGFuIGNsYXNzPVwicmVzcG9uMTRcIj5YICcgKyBiYXNRdWFudGl0eS52YWx1ZSArICcgPSA8YiBjbGFzcz1cInJCQlwiPicgKyAgcGFyc2VGbG9hdChyZXN1bHRQcmljZSkudG9GaXhlZCgyKSArIFwiPC9iPuKCrFwiICsgJzwvc3Bhbj4nO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yKCBsZXQgbD0wOyBsPHJCQlswXS5sZW5ndGg7IGwrKyl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc2Vzc2lvblN0b3JhZ2Uuc2V0SXRlbShhQmFza2V0W2ldLmlkLCBhQmFza2V0W2ldLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzBdLnRleHRDb250ZW50KTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdW0ucHVzaChyQkJbMF1bbF0udGV4dENvbnRlbnQpO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZ1bmN0aW9uIHN1bUFycmF5KCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IG51bVN1bSA9IDA7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9yIChsZXQgcT0wIDsgcTxzdW0ubGVuZ3RoIDsgcSsrKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtU3VtICs9IHBhcnNlRmxvYXQoc3VtW3FdKTt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuIG51bVN1bTt9O1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYockJhcyl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2Zvcm1TaG9wMicpKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGZzMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtU2hvcDInKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZnMyLmNoaWxkcmVuWzFdLnNldEF0dHJpYnV0ZSgndmFsdWUnLCBzdW1BcnJheSgpLnRvRml4ZWQoMikpO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByQmFzLnZhbHVlID0gbW9udGFudCArIHN1bUFycmF5KCkudG9GaXhlZCgyKSArICfigqwnO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgICAgICAgICBpZihhYil7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmKGFiLmNoaWxkcmVuLmxlbmd0aCA9PSAyICYmIHN0b2NrQmVlcltpKjIrMV0uY2hpbGRyZW5bMF0udmFsdWUgPT0gJ0Fqb3V0ZXInKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFkZEJJLnB1c2goYWIuaWQpO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgc3RvY2tCZWVyW2kqMisxXS5jaGlsZHJlblswXS52YWx1ZSA9ICdNb2RpZmllcic7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGFjM1tpXS5jaGlsZHJlblswXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmKG9yZGVyKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIG9yZGVyLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIn1cclxuICAgICAgICAgICAgICAgICAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBvcmRlcjIuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO31cclxuICAgICAgICAgICAgICAgICAgICAgICAgYWMzW2ldLmNoaWxkcmVuWzBdLnN0eWxlLmhlaWdodCA9IFwiNTBweFwiO31cclxuICAgICAgICAgICAgICAgICAgICBpZihhbGxCYXNrZXQuY2xpZW50V2lkdGg8MjUwKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgckJhcy5zdHlsZS53aWR0aCA9IFwiMTc1cHhcIjt9XHJcbiAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIGNvbnNvbGUubG9nKHNlc3Npb25TdG9yYWdlKTtcclxuICAgIGlmKHNlc3Npb25TdG9yYWdlLmxlbmd0aD4wKXtcclxuICAgICAgICBpZihtZW51T3BlblsxXSl7XHJcbiAgICAgICAgICAgIGxldCBjYyA9IG1lbnVPcGVuWzFdLmNoaWxkcmVuO1xyXG4gICAgICAgICAgICBtZW51T3BlblsxXS5zdHlsZS5mb250U2l6ZSA9IFwiMS4yZW1cIjtcclxuICAgICAgICAgICAgY2NbMF0uc3R5bGUuY29sb3IgPSBcInJlZFwiO1xyXG4gICAgICAgICAgICBjY1swXS5zdHlsZS5tYXJnaW5SaWdodCA9IFwiMjBweFwiO1xyXG4gICAgICAgICAgICBwYW5pZXIuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO1xyXG4gICAgICAgICAgICBpZihyQmFzKXtcclxuICAgICAgICAgICAgICAgIHJCYXMuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO31cclxuICAgICAgICAgICAgbGV0IHJCQiA9IFtdO1xyXG4gICAgICAgICAgICByQkIucHVzaChkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwickJCXCIpKTtcclxuICAgICAgICAgICAgZm9yKCBsZXQgaT0wOyBpPGFCYXNrZXQubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgICAgICAgICAgaWYoYUJhc2tldFtpXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYoc2Vzc2lvblN0b3JhZ2UuZ2V0SXRlbShhQmFza2V0W2ldLmlkKSl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCByZXN1bHRQcmljZSA9IHNlc3Npb25TdG9yYWdlLmdldEl0ZW0oYUJhc2tldFtpXS5pZCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGFsbEJhc2tldC5jbGFzc0xpc3QucmVwbGFjZShcImFsbEJhc2tldFwiLCBcImFsbEJhc2tldDJcIik7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBzdHIgPSBhQmFza2V0W2ldLmlkO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgaiA9IHN0ci5zbGljZSgxMCwgc3RyLmxlbmd0aCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBiZWVySWQgPSAnYmVlcicgKyBqO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBsZXQgbnVtYmVlciA9IHNlc3Npb25TdG9yYWdlLmdldEl0ZW0oYUJhc2tldFtpXS5pZCkgLyBwcmljZVtpXS52YWx1ZTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IGJpID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoYmVlcklkKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgbGV0IHN0cjIgPSBiaS5jaGlsZHJlblswXS5jaGlsZHJlblswXS5zcmM7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGxldCBhYiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGFCYXNrZXRbaV0uaWQpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBhYi5zdHlsZS5oZWlnaHQgPSBcIjgwcHhcIjtcclxuICAgICAgICAgICAgICAgICAgICAgICAgYWIuaW5uZXJIVE1MID0gICc8aW1nIHN0eWxlPVwid2lkdGg6IDUwcHg7XCIgc3JjPScgKyBzdHIyICsgJyBhbHQ9XCJcIj4gPHNwYW4gY2xhc3M9XCJyZXNwb24xNFwiPlggJyArIG51bWJlZXIgKyAnID0gPGIgY2xhc3M9XCJyQkJcIj4nICsgIHBhcnNlRmxvYXQocmVzdWx0UHJpY2UpLnRvRml4ZWQoMikgKyBcIjwvYj7igqxcIiArICc8L3NwYW4+JztcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYoYWIpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoc3RvY2tCZWVyW2kqMisxXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoYWIuY2hpbGRyZW4ubGVuZ3RoID09IDIgJiYgc3RvY2tCZWVyW2kqMisxXS5jaGlsZHJlblswXS52YWx1ZSA9PSAnQWpvdXRlcicpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBhZGRCSS5wdXNoKGFiLmlkKTt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgc3RvY2tCZWVyW2kqMisxXS5jaGlsZHJlblswXS52YWx1ZSA9ICdNb2RpZmllcic7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYoYWMzKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgYWMzW2ldLmNoaWxkcmVuWzBdLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZihvcmRlcil7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3JkZXIuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwifVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgb3JkZXIyLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZihhYzNbaV0pe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGFjM1tpXS5jaGlsZHJlblswXS5zdHlsZS5oZWlnaHQgPSBcIjUwcHhcIjt9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgaWYoYWxsQmFza2V0LmNsaWVudFdpZHRoPDI1MCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByQmFzLnN0eWxlLndpZHRoID0gXCIxNzVweFwiO31cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgZm9yKCBsZXQgbD0wOyBsPHJCQlswXS5sZW5ndGg7IGwrKyl7XHJcbiAgICAgICAgICAgICAgICBzdW0ucHVzaChyQkJbMF1bbF0udGV4dENvbnRlbnQpO31cclxuICAgICAgICAgICAgZnVuY3Rpb24gc3VtQXJyYXkoKXtcclxuICAgICAgICAgICAgICAgIGxldCBudW1TdW0gPSAwO1xyXG4gICAgICAgICAgICAgICAgZm9yIChsZXQgcT0wIDsgcTxzdW0ubGVuZ3RoIDsgcSsrKXtcclxuICAgICAgICAgICAgICAgICAgICBudW1TdW0gKz0gcGFyc2VGbG9hdChzdW1bcV0pO31cclxuICAgICAgICAgICAgICAgIHJldHVybiBudW1TdW07fTtcclxuICAgICAgICAgICAgaWYockJhcyl7XHJcbiAgICAgICAgICAgICAgICBpZihkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybVNob3AyJykpe1xyXG4gICAgICAgICAgICAgICAgICAgIGxldCBmczIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnZm9ybVNob3AyJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgZnMyLmNoaWxkcmVuWzFdLnNldEF0dHJpYnV0ZSgndmFsdWUnLCBzdW1BcnJheSgpLnRvRml4ZWQoMikpO31cclxuICAgICAgICAgICAgICAgIHJCYXMudmFsdWUgPSBtb250YW50ICsgc3VtQXJyYXkoKS50b0ZpeGVkKDIpICsgJ+KCrCc7fVxyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBpZihvcmRlcjIpe1xyXG4gICAgICAgIG9yZGVyMi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5jaGlsZHJlblsxXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblsxXS5jaGlsZHJlblsxXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5jaGlsZHJlblsxXS5zdHlsZS53aWR0aCA9IFwiMTI1cHhcIjtcclxuICAgICAgICAgICAgbW9kYWxTaG9wLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzFdLnN0eWxlLndpZHRoID0gXCIxMjVweFwiO1xyXG4gICAgICAgICAgICBtb2RhbFNob3AuY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF0uY2hpbGRyZW5bMV0uc3R5bGUuZm9udFNpemUgPSBcIjAuOGVtXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblsxXS5jaGlsZHJlblsxXS5zdHlsZS5mb250U2l6ZSA9IFwiMC44ZW1cIjtcclxuICAgICAgICAgICAgbW9kYWxTaG9wLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzBdLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICBtb2RhbFNob3AuY2hpbGRyZW5bMV0uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF0uc3R5bGUudmlzaWJpbGl0eSA9IFwiaGlkZGVuXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5jaGlsZHJlblswXS5zdHlsZS5oZWlnaHQgPSAwO1xyXG4gICAgICAgICAgICBtb2RhbFNob3AuY2hpbGRyZW5bMV0uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF0uc3R5bGUuaGVpZ2h0ID0gMDtcclxuICAgICAgICAgICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJkYmxjbGlja1wiLCBmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgICAgICAgICAgbW9kYWxTaG9wLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICAgICAgbW9kYWxTaG9wLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzFdLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgICAgICAgICAgbW9kYWxTaG9wLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzFdLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO30pXHJcbiAgICAgICAgfSlcclxuICAgIH1cclxuXHJcbiAgICBsZXQgaGVhcnQgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwiaGVhcnRcIik7XHJcbiAgICBpZihoZWFydCl7XHJcbiAgICAgICAgZm9yKCBsZXQgaT0wOyBpPGhlYXJ0Lmxlbmd0aDsgaSsrKXtcclxuICAgICAgICBoZWFydFtpXS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5zdHlsZS5yaWdodCA9IFwiMTAlXCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5jaGlsZHJlblswXS5zdHlsZS5ib3R0b20gPSBcIjE0MHB4XCI7XHJcbiAgICAgICAgICAgIG1vZGFsU2hvcC5jaGlsZHJlblsxXS5jaGlsZHJlblsxXS5jaGlsZHJlblswXS5zdHlsZS5ib3R0b20gPSBcIjE0MHB4XCI7XHJcbiAgICAgICAgICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwiZGJsY2xpY2tcIiwgZnVuY3Rpb24oZXZlbnQpIHtcclxuICAgICAgICAgICAgICAgIG1vZGFsU2hvcC5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjt9KVxyXG4gICAgICAgIH0pfVxyXG4gICAgfVxyXG5cclxuICAgIGlmKG5CKXtcclxuICAgICAgICBpZihuQi5jaGlsZHJlblswXS50ZXh0Q29udGVudCl7XHJcbiAgICAgICAgICAgIHJCYXMuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO1xyXG4gICAgICAgICAgICBsZXQgbkIxID0gIG5CLmNoaWxkcmVuWzFdLnRleHRDb250ZW50XHJcbiAgICAgICAgICAgIGxldCBrYWJpID0gJ2FkZEJhc0luZm8nICsgbkIxO1xyXG4gICAgICAgICAgICBsZXQgcmVzdWx0UHJpY2UyID0gbkIuY2hpbGRyZW5bMF0udGV4dENvbnRlbnQgKiBuQi5jaGlsZHJlblsyXS50ZXh0Q29udGVudDtcclxuICAgICAgICAgICAgYWxsQmFza2V0LmNsYXNzTGlzdC5yZXBsYWNlKFwiYWxsQmFza2V0XCIsIFwiYWxsQmFza2V0MlwiKTtcclxuICAgICAgICAgICAgbGV0IGJlZXJJZDIgPSAnYmVlcicgKyBuQjE7XHJcbiAgICAgICAgICAgIGxldCBiYSA9ICdiYXNBZGQnICsgbkIxO1xyXG4gICAgICAgICAgICBsZXQgZEJiID0gJ2RlbGV0ZUJlZXJCYXMnICsgbkIxO1xyXG4gICAgICAgICAgICBsZXQgYWIyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoa2FiaSk7XHJcbiAgICAgICAgICAgIGxldCBiaTIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChiZWVySWQyKTtcclxuICAgICAgICAgICAgbGV0IGJhMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKGJhKTtcclxuICAgICAgICAgICAgbGV0IGRiID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoZEJiKTtcclxuICAgICAgICAgICAgbGV0IHN0cjIyID0gYmkyLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzBdLnNyYztcclxuICAgICAgICAgICAgYWIyLnN0eWxlLmhlaWdodCA9IFwiODBweFwiO1xyXG4gICAgICAgICAgICBhYjIuaW5uZXJIVE1MID0gICc8aW1nIHN0eWxlPVwid2lkdGg6IDUwcHg7XCIgc3JjPScgKyBzdHIyMiArICcgYWx0PVwiXCI+IDxzcGFuIGNsYXNzPVwicmVzcG9uMTRcIj5YICcgKyBuQi5jaGlsZHJlblswXS50ZXh0Q29udGVudCArICcgPSA8YiBjbGFzcz1cInJCQlwiPicgKyAgcGFyc2VGbG9hdChyZXN1bHRQcmljZTIpLnRvRml4ZWQoMikgKyBcIjwvYj7igqxcIiArICc8L3NwYW4+JztcclxuICAgICAgICAgICAgbGV0IHJCQiA9IFtdO1xyXG4gICAgICAgICAgICByQkIucHVzaChkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwickJCXCIpKTtcclxuICAgICAgICAgICAgc3VtLnNwbGljZSgwLCBzdW0ubGVuZ3RoKTtcclxuICAgICAgICAgICAgZm9yKCBsZXQgbD0wOyBsPHJCQlswXS5sZW5ndGg7IGwrKyl7XHJcbiAgICAgICAgICAgICAgICBzZXNzaW9uU3RvcmFnZS5zZXRJdGVtKGFiMi5pZCwgYWIyLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzBdLnRleHRDb250ZW50KTtcclxuICAgICAgICAgICAgICAgIHJCQlswXVtsXTtcclxuICAgICAgICAgICAgICAgIHN1bS5wdXNoKHJCQlswXVtsXS50ZXh0Q29udGVudCk7fVxyXG4gICAgICAgICAgICBmdW5jdGlvbiBzdW1BcnJheSgpe1xyXG4gICAgICAgICAgICAgICAgbGV0IG51bVN1bSA9IDA7XHJcbiAgICAgICAgICAgICAgICBmb3IgKGxldCBxPTAgOyBxPHN1bS5sZW5ndGggOyBxKyspe1xyXG4gICAgICAgICAgICAgICAgICAgIG51bVN1bSArPSBwYXJzZUZsb2F0KHN1bVtxXSk7fVxyXG4gICAgICAgICAgICAgICAgcmV0dXJuIG51bVN1bTt9O1xyXG4gICAgICAgICAgICBpZihyQmFzKXtcclxuICAgICAgICAgICAgICAgIGlmKGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtU2hvcDInKSl7XHJcbiAgICAgICAgICAgICAgICAgICAgbGV0IGZzMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdmb3JtU2hvcDInKTtcclxuICAgICAgICAgICAgICAgICAgICBmczIuY2hpbGRyZW5bMV0uc2V0QXR0cmlidXRlKCd2YWx1ZScsIHN1bUFycmF5KCkudG9GaXhlZCgyKSk7fVxyXG4gICAgICAgICAgICAgICAgckJhcy52YWx1ZSA9IG1vbnRhbnQgKyBzdW1BcnJheSgpLnRvRml4ZWQoMikgKyAn4oKsJzt9XHJcbiAgICAgICAgICAgIGlmKGFiMil7XHJcbiAgICAgICAgICAgICAgICBpZihhYjIuY2hpbGRyZW4ubGVuZ3RoID09IDIgJiYgYmEyLmNoaWxkcmVuWzBdLnZhbHVlID09ICdBam91dGVyJyl7XHJcbiAgICAgICAgICAgICAgICAgICAgYWRkQkkucHVzaChhYjIuaWQpO31cclxuICAgICAgICAgICAgICAgIGJhMi5jaGlsZHJlblswXS52YWx1ZSA9ICdNb2RpZmllcic7XHJcbiAgICAgICAgICAgICAgICBkYi5jaGlsZHJlblswXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICBpZihvcmRlcil7XHJcbiAgICAgICAgICAgICAgICAgICAgb3JkZXIuc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwifVxyXG4gICAgICAgICAgICAgICAgZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAgICAgb3JkZXIyLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjt9XHJcbiAgICAgICAgICAgICAgICBkYi5jaGlsZHJlblswXS5zdHlsZS5oZWlnaHQgPSBcIjUwcHhcIjt9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIGlmKG9yZGVyU2hvcCl7XHJcbiAgICAgICAgbGV0IHN1bU9yZGVyID0gW107XHJcbiAgICAgICAgbGV0IGJ1dDIgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdzYnV0dG9uMicpO1xyXG4gICAgICAgIGJ1dDJbMF0uc3R5bGUucG9zaXRpb24gPSAncmVsYXRpdmUnO1xyXG4gICAgICAgIGJ1dDJbMF0uc3R5bGUudG9wID0gMDtcclxuICAgICAgICBmb3IoIGxldCByPTE7IHI8b3JkZXJTaG9wLmNoaWxkcmVuWzBdLmNoaWxkcmVuLmxlbmd0aC0yOyByKyspe1xyXG4gICAgICAgICAgICBpZihvcmRlclNob3AuY2hpbGRyZW5bMF0uY2hpbGRyZW5bcl0uY2hpbGRyZW5bMF0uY2hpbGRyZW5bMF0pe1xyXG4gICAgICAgICAgICAgICAgbGV0IG9jID0gb3JkZXJTaG9wLmNoaWxkcmVuWzBdLmNoaWxkcmVuW3JdLmNoaWxkcmVuWzBdO1xyXG4gICAgICAgICAgICAgICAgb2Muc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgICB9O1xyXG4gICAgICAgICAgICBpZihvcmRlclNob3AuY2hpbGRyZW5bMF0uY2hpbGRyZW5bcl0uY2hpbGRyZW5bMF0uY2hpbGRyZW5bMV0pe1xyXG4gICAgICAgICAgICAgICAgbGV0IG9jID0gb3JkZXJTaG9wLmNoaWxkcmVuWzBdLmNoaWxkcmVuW3JdLmNoaWxkcmVuWzBdO1xyXG4gICAgICAgICAgICAgICAgb2Muc3R5bGUuaGVpZ2h0ID0gXCIxNjBweFwiO1xyXG4gICAgICAgICAgICAgICAgb2Muc3R5bGUuYm9yZGVyID0gJzFweCBzb2xpZCBibGFjayc7XHJcbiAgICAgICAgICAgICAgICBsZXQgc3RyNCA9IG9jLmlkO1xyXG4gICAgICAgICAgICAgICAgbGV0IGogPSBzdHI0LnNsaWNlKDEwLCBzdHI0Lmxlbmd0aCk7XHJcbiAgICAgICAgICAgICAgICBsZXQgYmVlcklkID0gJ2JlJyArIGo7XHJcbiAgICAgICAgICAgICAgICBsZXQgYmlkID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoYmVlcklkKTtcclxuICAgICAgICAgICAgICAgIG9jLmlubmVySFRNTCArPSBcIjxzcGFuIGNsYXNzPSd0MSBmbGV4Jz48Yj5cIiArIGJpZC5jaGlsZHJlblswXS50ZXh0Q29udGVudCArIFwiPC9iPjxiPlwiICsgYmlkLmNoaWxkcmVuWzFdLnRleHRDb250ZW50ICsgXCI8L2I+PC9zcGFuPlwiO1xyXG4gICAgICAgICAgICAgICAgb2Muc3R5bGUuZGlzcGxheSA9IFwiZmxleFwiO1xyXG4gICAgICAgICAgICAgICAgb2MuaW5uZXJIVE1MICs9IFwiPHNwYW4gY2xhc3M9J3QyIGZsZXgnPjxiPmFsYyU6IFwiICsgYmlkLmNoaWxkcmVuWzJdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzBdLnRleHRDb250ZW50ICsgXCI8L2I+PGI+XCIgKyBiaWQuY2hpbGRyZW5bMl0uY2hpbGRyZW5bMV0uY2hpbGRyZW5bMF0udGV4dENvbnRlbnQgKyBcIjwvYj48Yj5wcml4IFU6IFwiICsgYmlkLmNoaWxkcmVuWzJdLmNoaWxkcmVuWzJdLmNoaWxkcmVuWzBdLnRleHRDb250ZW50ICsgXCI8L2I+PGI+dm9sIGNsOiBcIiArIGJpZC5jaGlsZHJlblsyXS5jaGlsZHJlblszXS5jaGlsZHJlblswXS50ZXh0Q29udGVudCArIFwiPC9iPjwvc3Bhbj5cIjtcclxuICAgICAgICAgICAgICAgIHN1bU9yZGVyLnB1c2gob3JkZXJTaG9wLmNoaWxkcmVuWzBdLmNoaWxkcmVuW3JdLmNoaWxkcmVuWzBdLmNoaWxkcmVuWzFdLmNoaWxkcmVuWzBdLnRleHRDb250ZW50KTtcclxuICAgICAgICAgICAgfTtcclxuICAgICAgICAgICAgZnVuY3Rpb24gc3VtQXJyYXlPcmRlcigpe1xyXG4gICAgICAgICAgICAgICAgbGV0IG51bVN1bU9yZGVyID0gMDtcclxuICAgICAgICAgICAgICAgIGZvciAobGV0IHE9MCA7IHE8c3VtT3JkZXIubGVuZ3RoIDsgcSsrKXtcclxuICAgICAgICAgICAgICAgICAgICBudW1TdW1PcmRlciArPSBwYXJzZUZsb2F0KHN1bU9yZGVyW3FdKTt9XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gbnVtU3VtT3JkZXI7fVxyXG4gICAgICAgICAgICBsZXQgc3BvID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Nob3BfcHJpY2Vfb3JkZXInKTtcclxuICAgICAgICAgICAgc3BvLnZhbHVlID0gc3VtQXJyYXlPcmRlcigpLnRvRml4ZWQoMik7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGxldCBvcmRlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdvcmRlcicpO1xyXG4gICAgICAgIG9yZGVyLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICAgIGxldCBhbGMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1kZXRhaWxzY29tbWFuZGVcIikuY2hpbGRyZW5bMF07XHJcbiAgICAgICAgZm9yIChsZXQgcj0wIDsgcjwoYUJhc2tldC5sZW5ndGgtMikqMiA7IHIrKyl7XHJcbiAgICAgICAgICAgIGlmKGFCYXNrZXRbcl0pe1xyXG4gICAgICAgICAgICAgICAgaWYoc2Vzc2lvblN0b3JhZ2UuZ2V0SXRlbShhQmFza2V0W3JdLmlkKSl7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYoYWxjLmNoaWxkcmVuW3IqMisxXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgYWxjLmNoaWxkcmVuW3IqMisxXS52YWx1ZSA9IHNlc3Npb25TdG9yYWdlLmdldEl0ZW0oYUJhc2tldFtyXS5pZCk7fVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgaWYoYWxjLmNoaWxkcmVuW3IqMisxXSl7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYoYWxjLmNoaWxkcmVuW3IqMisxXS52YWx1ZSA9PSAwKXtcclxuICAgICAgICAgICAgICAgICAgICAgICAgYWxjLmNoaWxkcmVuW3IqMisxXS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGFsYy5jaGlsZHJlbltyKjIrMV0uc2V0QXR0cmlidXRlKFwiZGlzYWJsZWRcIiwgXCJkaXNhYmxlZFwiKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgYWxjLmNoaWxkcmVuW3IqMl0uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBhbGMuY2hpbGRyZW5bcioyXS5zZXRBdHRyaWJ1dGUoXCJkaXNhYmxlZFwiLCBcImRpc2FibGVkXCIpO31cclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgICBsZXQgYWxjMiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZm9ybWRldGFpbHNjb21tYW5kZVwiKS5jaGlsZHJlblsxXTtcclxuICAgICAgICBjb25zb2xlLmxvZyhkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1kZXRhaWxzY29tbWFuZGVcIikuY2hpbGRyZW5bMF0ubGFzdEVsZW1lbnRDaGlsZCk7XHJcbiAgICAgICAgbGV0IGFsYzMgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZvcm1kZXRhaWxzY29tbWFuZGVcIikuY2hpbGRyZW5bMF0ubGFzdEVsZW1lbnRDaGlsZDtcclxuICAgICAgICBhbGMzLnNldEF0dHJpYnV0ZSgnbmFtZScsICdzb21ldGhpbmcnKTtcclxuICAgICAgICBhbGMyLmNsaWNrKCk7XHJcblxyXG4gICAgfVxyXG5cclxuICAgIGxldCBvcmRlckFkbWluID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJvcmRlckFkbWluXCIpO1xyXG4gICAgaWYob3JkZXJBZG1pbil7XHJcbiAgICAgICAgb3JkZXJBZG1pbi5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBmdW5jdGlvbigpe1xyXG4gICAgICAgICAgICBsZXQgcHByZXNlbnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInByb2ZpbFByZXNlbnRcIik7XHJcbiAgICAgICAgICAgIHZhciBpbmRleCA9IG9yZGVyQWRtaW4uc2VsZWN0ZWRJbmRleDtcclxuICAgICAgICAgICAgbGV0IGJzcCA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJibG9jU1BcIik7XHJcbiAgICAgICAgICAgIGZvcihsZXQgcz0wOyBzPGJzcC5sZW5ndGg7IHMrKyl7XHJcbiAgICAgICAgICAgICAgICBsZXQgcHBjID0gcHByZXNlbnQuY2hpbGRyZW5bMl0uY2hpbGRyZW5baW5kZXhdO1xyXG4gICAgICAgICAgICAgICAgbGV0IHBwY2FsbCA9IHBwcmVzZW50LmNoaWxkcmVuWzJdLmNoaWxkcmVuO1xyXG4gICAgICAgICAgICAgICAgZm9yKGxldCB0PTA7IHQ8cHBjYWxsLmxlbmd0aDsgdCsrKXtcclxuICAgICAgICAgICAgICAgICAgICBwcGNhbGxbdF0uc3R5bGUudmlzaWJpbGl0eSA9IFwiaGlkZGVuXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgcHBjYWxsW3RdLnN0eWxlLmZvbnRTaXplID0gXCIwZW1cIjt9XHJcbiAgICAgICAgICAgICAgICBpZihwcGMpe1xyXG4gICAgICAgICAgICAgICAgICAgIHBwYy5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgcHBjLnN0eWxlLmZvbnRTaXplID0gXCIxZW1cIjt9XHJcbiAgICAgICAgICAgIGJzcFtzXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJoaWRkZW5cIjtcclxuICAgICAgICAgICAgYnNwW3NdLnN0eWxlLnBvc2l0aW9uID0gXCJhYnNvbHV0ZVwiO1xyXG4gICAgICAgICAgICBpZihic3Bbc10uY2hpbGRyZW5bMl0udGV4dENvbnRlbnQgPT0gJ1N0YXR1dCA6ZW4gY291cnMgZGUgcHLDqXBhcmF0aW9uJyAmJiBpbmRleCA9PSAwKXtcclxuICAgICAgICAgICAgICAgIGJzcFtzXS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICBic3Bbc10uc3R5bGUucG9zaXRpb24gPSBcInJlbGF0aXZlXCI7XHJcbiAgICAgICAgICAgIH1lbHNlIGlmKGJzcFtzXS5jaGlsZHJlblsyXS50ZXh0Q29udGVudCA9PSAnU3RhdHV0IDplbiBwcsOpcGFyYXRpb24nICYmIGluZGV4ID09IDEpe1xyXG4gICAgICAgICAgICAgICAgYnNwW3NdLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcclxuICAgICAgICAgICAgICAgIGJzcFtzXS5zdHlsZS5wb3NpdGlvbiA9IFwicmVsYXRpdmVcIjtcclxuICAgICAgICAgICAgfWVsc2UgaWYoYnNwW3NdLmNoaWxkcmVuWzJdLnRleHRDb250ZW50ID09IFwiU3RhdHV0IDplbiBjb3VycyBkJ2FjaGVtaW5lbWVudFwiICYmIGluZGV4ID09IDIpe1xyXG4gICAgICAgICAgICAgICAgYnNwW3NdLnN0eWxlLnZpc2liaWxpdHkgPSBcInZpc2libGVcIjtcclxuICAgICAgICAgICAgICAgIGJzcFtzXS5zdHlsZS5wb3NpdGlvbiA9IFwicmVsYXRpdmVcIjtcclxuICAgICAgICAgICAgfWVsc2UgaWYoYnNwW3NdLmNoaWxkcmVuWzJdLnRleHRDb250ZW50ID09IFwiU3RhdHV0IDpsaXZyw6llXCIgJiYgaW5kZXggPT0gMyl7XHJcbiAgICAgICAgICAgICAgICBic3Bbc10uc3R5bGUudmlzaWJpbGl0eSA9IFwidmlzaWJsZVwiO1xyXG4gICAgICAgICAgICBic3Bbc10uc3R5bGUucG9zaXRpb24gPSBcInJlbGF0aXZlXCI7fVxyXG4gICAgICAgICAgICBpZihpbmRleCA9PSBzKXtcclxuICAgICAgICAgICAgICAgIHBwYy5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICAgICAgICAgICAgICBwcGMuc3R5bGUuZm9udFNpemUgPSBcIjFlbVwiO31cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pXHJcbiAgICB9XHJcblxyXG59KSIsImltcG9ydCB7IHN0YXJ0U3RpbXVsdXNBcHAgfSBmcm9tICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UnO1xuXG4vLyBSZWdpc3RlcnMgU3RpbXVsdXMgY29udHJvbGxlcnMgZnJvbSBjb250cm9sbGVycy5qc29uIGFuZCBpbiB0aGUgY29udHJvbGxlcnMvIGRpcmVjdG9yeVxuZXhwb3J0IGNvbnN0IGFwcCA9IHN0YXJ0U3RpbXVsdXNBcHAocmVxdWlyZS5jb250ZXh0KFxuICAgICdAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlciEuL2NvbnRyb2xsZXJzJyxcbiAgICB0cnVlLFxuICAgIC9cXC5banRdc3g/JC9cbikpO1xuXG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxuLy8gYXBwLnJlZ2lzdGVyKCdzb21lX2NvbnRyb2xsZXJfbmFtZScsIFNvbWVJbXBvcnRlZENvbnRyb2xsZXIpO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIkNvbnRyb2xsZXIiLCJlbGVtZW50IiwidGV4dENvbnRlbnQiLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiZXZlbnQiLCJidXR0b24iLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiYnV0dG9uMyIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJoMSIsIm1jIiwibXAiLCJzQiIsInNCMiIsInNCMyIsInA1IiwicDU1IiwiYWxsQmFza2V0Iiwib3JkZXIiLCJvcmRlcjIiLCJyZXNwb24xNCIsInJCYXMiLCJzdG9ja0JlZXIiLCJwb3U1IiwicHJpY2UiLCJ2YWx1ZVByaWNlIiwidmFsdWVQUmVzdWx0IiwiZGVsZXRlQmVlciIsImRlbGV0ZUNhdGVnb3J5IiwiZGVsZXRlQ29udGFjdCIsImRlbGV0ZVByb2pldCIsImFCYXNrZXQiLCJhYzMiLCJhZGRCSSIsIm1vbnRhbnQiLCJpIiwibGVuZ3RoIiwicHVzaCIsImNoaWxkcmVuIiwiaWQiLCJib2R5IiwicXVlcnlTZWxlY3RvciIsImNsaWVudFdpZHRoIiwiayIsInN0eWxlIiwid2lkdGgiLCJib3R0b20iLCJsZWZ0IiwiZm9udFNpemUiLCJxIiwicGFkZGluZyIsIm1hdGNoTWVkaWEiLCJtYXRjaGVzIiwic2V0SW50ZXJ2YWwiLCJmb290ZXIiLCJtZW51SW1nIiwiZlRvcCIsImFycm93MiIsImhpZGUiLCJuQiIsIm1lbnVPcGVuIiwicGFuaWVyIiwibW9kYWxTaG9wIiwib3JkZXJTaG9wIiwiZXJyb3JTaG9wIiwiYnV0dG9uUHJvZmlsIiwiYnV0dG9uSW1nMSIsImJ1dHRvbkltZzIiLCJoZWlnaHQiLCJkaXNwbGF5Iiwic2Vzc2lvblN0b3JhZ2UiLCJjbGVhciIsInN1Y2Nlc3NTaG9wIiwidGV4dEFsaWduIiwidmlzaWJpbGl0eSIsInRvcCIsIm1hcmdpbiIsInRyYW5zaXRpb24iLCJib3hTaGFkb3ciLCJib3JkZXJSYWRpdXMiLCJib3JkZXIiLCJhbmltYXRpb24iLCJvcGFjaXR5IiwibWVudSIsImJhY2tncm91bmQiLCJwYWRkaW5nQm90dG9tIiwibWFyZ2luVG9wIiwiYXJyIiwiY2xhc3NMaXN0IiwicmVwbGFjZSIsImhpZCIsImlubmVySFRNTCIsInZhbHVlIiwic3AiLCJwYWRkaW5nVG9wIiwicmVzdWx0UHJpY2UiLCJjb25zb2xlIiwibG9nIiwicGFyc2VGbG9hdCIsInRvRml4ZWQiLCJwcmV2ZW50RGVmYXVsdCIsInN0ciIsImoiLCJzbGljZSIsImxlbmdodCIsIm0iLCJtb2QiLCJubyIsIm5vbiIsImRlbGV0ZUJlZXJNIiwiZGVsZXRlQk0iLCJzdW0iLCJhYmkiLCJiZWVySWQiLCJhYiIsImJpIiwicG9wIiwibiIsIm8iLCJyZW1vdmVJdGVtIiwicCIsInNwbGljZSIsInJCQjIiLCJsIiwic3VtQXJyYXkiLCJudW1TdW0iLCJmczIiLCJzZXRBdHRyaWJ1dGUiLCJiYXNRdWFudGl0eSIsInJCQiIsInN0cjIiLCJzcmMiLCJzZXRJdGVtIiwiY2MiLCJjb2xvciIsIm1hcmdpblJpZ2h0IiwiZ2V0SXRlbSIsIm51bWJlZXIiLCJoZWFydCIsInJpZ2h0IiwibkIxIiwia2FiaSIsInJlc3VsdFByaWNlMiIsImJlZXJJZDIiLCJiYSIsImRCYiIsImFiMiIsImJpMiIsImJhMiIsImRiIiwic3RyMjIiLCJzdW1PcmRlciIsImJ1dDIiLCJwb3NpdGlvbiIsInIiLCJzdW1BcnJheU9yZGVyIiwibnVtU3VtT3JkZXIiLCJvYyIsInN0cjQiLCJiaWQiLCJzcG8iLCJhbGMiLCJhbGMyIiwibGFzdEVsZW1lbnRDaGlsZCIsImFsYzMiLCJjbGljayIsIm9yZGVyQWRtaW4iLCJwcHJlc2VudCIsImluZGV4Iiwic2VsZWN0ZWRJbmRleCIsImJzcCIsInMiLCJwcGMiLCJwcGNhbGwiLCJ0Iiwic3RhcnRTdGltdWx1c0FwcCIsImFwcCIsInJlcXVpcmUiLCJjb250ZXh0Il0sInNvdXJjZVJvb3QiOiIifQ==