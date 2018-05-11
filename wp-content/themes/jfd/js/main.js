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

var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
jQuery(document).ready(function ($) {
    // Code that uses jQuery's $ can follow here.
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
    var ScrollTo = /** @class */ (function () {
        function ScrollTo(selector, target, offsetTop, animationTime) {
            if (target === void 0) { target = "body"; }
            if (offsetTop === void 0) { offsetTop = 200; }
            if (animationTime === void 0) { animationTime = 300; }
            this.selector = selector;
            this.target = target;
            this.offsetTop = offsetTop;
            this.animationTime = animationTime;
            this.scroll = this.scroll.bind(this);
            this.to = this.to.bind(this);
        }
        ScrollTo.prototype.scroll = function () {
            var selector = $(this.selector);
            selector.on("click", this.to);
        };
        ScrollTo.prototype.to = function () {
            var target = $(this.target).position();
            $("html,body").animate({
                scrollTop: (target.top - this.offsetTop)
            }, this.animationTime);
            console.log("It is working");
            return false;
        };
        ScrollTo.prototype.start = function () {
            this.scroll();
        };
        return ScrollTo;
    }());
    var service = new ScrollTo("#menu-item-42", "#services");
    service.start();
    var ScrollVisible = /** @class */ (function (_super) {
        __extends(ScrollVisible, _super);
        function ScrollVisible(selector, target, id, threshold) {
            if (target === void 0) { target = "body"; }
            if (threshold === void 0) { threshold = 50; }
            var _this = _super.call(this, selector, target) || this;
            _this.threshold = threshold;
            _this.id = id;
            _this.height = $("body").height();
            _this.checkThreshold = _this.checkThreshold.bind(_this);
            _this.onScroll = _this.onScroll.bind(_this);
            _this.onClick = _this.onClick.bind(_this);
            return _this;
        }
        ScrollVisible.prototype.checkThreshold = function () {
            var threshold = (this.height / 100) * this.threshold, scrollPosition = $(window).scrollTop(), selector = $(this.selector);
            //         console.log(`selector is  ${selector}`);
            if (threshold <= scrollPosition) {
                selector.addClass(this.id).removeClass("fade-out");
            }
            else {
                selector.removeClass(this.id).addClass("fade-out");
            }
        };
        ScrollVisible.prototype.onScroll = function () {
            var $window = $(window);
            $window.on("scroll", this.checkThreshold);
        };
        ScrollVisible.prototype.onClick = function () {
            var selector = $(this.selector);
            console.log(this.scroll);
            selector.on("click", this.to);
        };
        ScrollVisible.prototype.start = function () {
            this.onClick();
            this.onScroll();
        };
        return ScrollVisible;
    }(ScrollTo));
    var bottomArrow = new ScrollVisible(".fixed-bottom-block", "body", "appear");
    bottomArrow.start();
    //$("#menu-item-42").on("click", function(){
    //     const element = $("#services").position();
    //    $("html,body").animate({
    //        scrollTop:(element.top-200)
    //    },300);
    //    return false;
    //});
}); //end JQuery


/***/ })
/******/ ]);