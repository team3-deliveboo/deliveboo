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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/frontend.js":
/*!**********************************!*\
  !*** ./resources/js/frontend.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /Users/silviawolves/Documents/Boolean/deliveboo/resources/js/frontend.js: Unexpected token (2:0)\n\n\u001b[0m \u001b[90m 1 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mVue\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m'vue'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 2 |\u001b[39m \u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   |\u001b[39m \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 3 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mFrontend\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m'./Frontend.vue'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 4 |\u001b[39m \u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mFrontend\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m'./components/Frontend.vue'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n    at instantiate (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:72:32)\n    at constructor (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:367:12)\n    at Parser.raise (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:3684:19)\n    at Parser.unexpected (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:3722:16)\n    at Parser.parseExprAtom (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:13323:22)\n    at Parser.parseExprSubscripts (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12848:23)\n    at Parser.parseUpdate (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12827:21)\n    at Parser.parseMaybeUnary (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12797:23)\n    at Parser.parseMaybeUnaryOrPrivate (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12588:61)\n    at Parser.parseExprOps (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12595:23)\n    at Parser.parseMaybeConditional (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12565:23)\n    at Parser.parseMaybeAssign (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12517:21)\n    at Parser.parseExpressionBase (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12453:23)\n    at /Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12447:39\n    at Parser.allowInAnd (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:14543:16)\n    at Parser.parseExpression (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:12447:17)\n    at Parser.parseStatementContent (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:14983:23)\n    at Parser.parseStatement (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:14840:17)\n    at Parser.parseBlockOrModuleBlockBody (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:15499:25)\n    at Parser.parseBlockBody (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:15490:10)\n    at Parser.parseProgram (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:14758:10)\n    at Parser.parseTopLevel (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:14745:25)\n    at Parser.parse (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:16768:10)\n    at parse (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/parser/lib/index.js:16820:38)\n    at parser (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/core/lib/parser/index.js:52:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/core/lib/transformation/normalize-file.js:87:38)\n    at normalizeFile.next (<anonymous>)\n    at run (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/core/lib/transformation/index.js:31:50)\n    at run.next (<anonymous>)\n    at transform (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/@babel/core/lib/transform.js:29:41)\n    at transform.next (<anonymous>)\n    at step (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/gensync/index.js:261:32)\n    at /Users/silviawolves/Documents/Boolean/deliveboo/node_modules/gensync/index.js:273:13\n    at async.call.result.err.err (/Users/silviawolves/Documents/Boolean/deliveboo/node_modules/gensync/index.js:223:11)");

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/frontend.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/silviawolves/Documents/Boolean/deliveboo/resources/js/frontend.js */"./resources/js/frontend.js");


/***/ })

/******/ });