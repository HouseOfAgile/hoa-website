/**
 *
 * @author Ben Zörb @bezoerb https://github.com/bezoerb
 * @copyright Copyright (c) 2015 Ben Zörb
 *
 * Licensed under the MIT license.
 * http://bezoerb.mit-license.org/
 * All rights reserved.
 */

define(function(require, exports) {
    'use strict';
    var $ = require('jquery');
    var log = require('loglevel');
    require('animatedWords');

    exports.init = function init() {
        log.setLevel(0);
        log.debug('\'Allo \'Allo');
        log.debug('Running jQuery:', $().jquery);
        //animatedWords.initHeadline();
        //$('.button-collapse').sideNav();
        $('.scrollspy').scrollSpy();
        $('.button-collapse').sideNav({menuWidth: 240, activationWidth: 70});
        $('.parallax').parallax();
    };
});
