/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/app.js":
/*!********************!*\
  !*** ./src/app.js ***!
  \********************/
/***/ (() => {

var navClosed = document.querySelector(".nav-closed");
var navOpen = document.querySelector(".nav-open");
var tlMenuOpen = gsap.timeline({
  paused: true
});
tlMenuOpen.to(".nav-links", {
  right: 0,
  duration: 0.2
}).from(".nav-links ul li", {
  x: -200,
  opacity: 0,
  stagger: 0.1
}, ">");
navClosed.addEventListener("click", function () {
  tlMenuOpen.play().timeScale(1);
});
navOpen.addEventListener("click", function () {
  tlMenuOpen.timeScale(2);
  tlMenuOpen.reverse();
});
ScrollTrigger.defaults({
  //toggleActions: "restart pause resume pause",
  scroller: ".container-2"
});
var tl = gsap.timeline();
var tl2 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".intro"
  }
});
var tl3 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".about"
  }
});
var tl4 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".sale"
  }
});
var tl5 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".services"
  }
});
var tl6 = gsap.timeline({
  scrollTrigger: {
    start: "-20%",
    trigger: ".do-you"
  }
});
var tl7 = gsap.timeline({
  scrollTrigger: {
    start: "-5%",
    trigger: ".contact"
  }
});
tl.from("a.custom-logo-link", {
  y: -100,
  opacity: 0
}).from(".hamburger", {
  y: -100,
  opacity: 0
}, "<").from(".hero-title h1", {
  x: -100,
  opacity: 0,
  stagger: 0.2
}, "<+0.2");
tl2.from(".intro p", {
  x: -100,
  opacity: 0
}).from(".intro h3", {
  x: 100,
  opacity: 0
}, "<+0.1");
tl3.from(".sec-title__about", {
  x: -100,
  opacity: 0
}).from(".title__about", {
  x: -100,
  opacity: 0
}, "<+0.1").from(".paragraph__about", {
  x: 100,
  opacity: 0
}, "<+0.1");
tl4.from(".sec-title__sale", {
  x: 100,
  opacity: 0
}).from(".cars", {
  y: 100,
  opacity: 0,
  stagger: 0.2
}, "<").from("section.sale .wrap button", {
  y: 100,
  opacity: 0
}, ">-0.3");
tl5.from(".sec-title__services", {
  x: -100,
  opacity: 0
}).from(".title__services", {
  x: -100,
  opacity: 0
}, "<+0.1").from(".paragraph__services", {
  x: 100,
  opacity: 0
}, "<+0.1");
tl6.from(".sec-title__do-you h1", {
  x: -100,
  opacity: 0,
  stagger: 0.1
}, "<+0.1").from("section.do-you .wrap button", {
  x: -100,
  opacity: 0
}, "<+0.1").from(".do-you-img", {
  x: 100,
  opacity: 0
}, "<+0.1");
tl7.from("footer.contact .sec-title", {
  x: -100,
  opacity: 0
}).from(".contact-list", {
  x: -100,
  opacity: 0
}, "<+0.1").from(".links", {
  x: 100,
  opacity: 0
}, "<+0.1");

/***/ }),

/***/ "./src/app.scss":
/*!**********************!*\
  !*** ./src/app.scss ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkmanracing_new"] = self["webpackChunkmanracing_new"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./src/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./src/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;