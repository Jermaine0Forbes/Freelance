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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__ts_app_ts__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__ts_app_ts___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__ts_app_ts__);



/***/ }),
/* 3 */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
    // Code that uses jQuery's $ can follow here.
    var Talk;
    (function (Talk) {
        Talk[Talk["yes"] = 1] = "yes";
        Talk[Talk["no"] = 0] = "no";
        Talk[Talk["maybe"] = 2] = "maybe";
    })(Talk || (Talk = {}));
    function action(message) {
        switch (message) {
            case 0:
                console.log("you said no");
                break;
            case 1:
                console.log("you said yes");
                break;
            case 2:
                console.log("you said maybe");
                break;
        }
    }
    function StickMenu(obj) {
        obj = empty(obj) ? {} : obj;
        var menuBar = $(obj.menu) || $('.sticky-menu'), menuClass = obj.class || "on", _up = obj.whenUp || false, _down = obj.whenDown || false, _window = $(window);
        var properties, adminBar = obj.bar || $('#wpadminbar').height(), menuHeight, menuOffset, previousPosition, scrollPosition, sticking;
        function whenUp() {
            if (_up) {
                _up();
            }
            else {
                //console.log("it is scrolling up")
            }
        }
        function whenDown() {
            if (_down) {
                _down();
            }
            else {
                //console.log("it is scrolling down")
            }
        }
        function whenSticking() {
            if (!menuBar.hasClass(menuClass)) {
                menuBar.addClass(menuClass).css(properties);
                (function () {
                    var stat = $(".static-logo"), fix = $(".fixed-logo");
                    stat.hide();
                    fix.addClass("appear").removeClass("hide");
                })();
            }
            else {
                var activate = (previousPosition <= scrollPosition) ? whenDown : whenUp;
                activate();
            }
        }
        function empty(value) {
            if (value == null || value == "" || value == false || value == undefined) {
                return true;
            }
            return false;
        }
        function onScroll() {
            properties = (empty(adminBar)) ? { position: "fixed", width: "100%" } : { position: "fixed", width: "100%", top: adminBar };
            scrollPosition = _window.scrollTop();
            sticking = (menuOffset <= scrollPosition) ? true : false;
            if (sticking) {
                whenSticking();
                previousPosition = scrollPosition;
            }
            else {
                menuBar.removeClass(menuClass).removeAttr("style");
                $(".static-logo").show();
                $(".fixed-logo").addClass("hide").removeClass("appear");
                previousPosition = scrollPosition;
            }
        }
        function onResize() {
            var mobile = _window.width();
            adminBar = $('#wpadminbar').height();
            adminBar = (empty(adminBar)) ? 0 : adminBar;
            properties = (mobile <= 600) ? { position: "fixed", width: "100%", top: 0 } : { position: "fixed", width: "100%", top: adminBar };
            // (menuBar.hasClass("on"))? menuBar.css(properties): onScroll();
            menuBar.hasClass("on") && menuBar.css(properties);
        }
        function scroll() {
            menuHeight = menuBar.height();
            menuOffset = (empty(adminBar)) ? menuHeight : menuBar.offset().top;
            onResize();
            _window.on("scroll", onScroll); //scroll
            _window.on("resize", onResize);
        }
        return {
            start: scroll,
            whenUp: whenUp,
            whenDown: whenDown
        };
    }
    var header = StickMenu({
        menu: "header#masthead",
        whenUp: function () {
            $("header#masthead").css({
                "transform": "translateY(0)"
            });
        },
        whenDown: function () {
            $("header#masthead").css({
                "transform": "translateY(-163px)"
            });
        }
    });
    header.start();
}); //end JQuery


/***/ })
/******/ ]);