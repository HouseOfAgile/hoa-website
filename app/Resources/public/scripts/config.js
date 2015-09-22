/* jshint -W098,-W079 */
var require = {
    baseUrl: 'bower_components',
    paths: {
        main: '../app/Resources/public/scripts/main',
        app: '../app/Resources/public/scripts/app',
        animatedWords: '../app/Resources/public/scripts/modules/animatedWords',
        jquery: 'jquery/dist/jquery',
        loglevel: 'loglevel/dist/loglevel.min',
        modernizr: 'modernizr/modernizr',
        hammerjs: 'hammerjs/hammer',
        'jquery.easing': 'materialize/js/jquery.easing.1.3',
        velocity: 'materialize/js/velocity.min',
        picker: 'materialize/js/date_picker/picker',
        'picker.date': 'materialize/js/date_picker/picker.date',
        waves: 'materialize/js/waves',
        global: 'materialize/js/global',
        animation: 'materialize/js/animation',
        collapsible: 'materialize/js/collapsible',
        dropdown: 'materialize/js/dropdown',
        leanModal: 'materialize/js/leanModal',
        materialbox: 'materialize/js/materialbox',
        tabs: 'materialize/js/tabs',
        sideNav: 'materialize/js/sideNav',
        parallax: 'materialize/js/parallax',
        scrollspy: 'materialize/js/scrollspy',
        tooltip: 'materialize/js/tooltip',
        slider: 'materialize/js/slider',
        cards: 'materialize/js/cards',
        buttons: 'materialize/js/buttons',
        pushpin: 'materialize/js/pushpin',
        character_counter: 'materialize/js/character_counter',
        toasts: 'materialize/js/toasts',
        forms: 'materialize/js/forms',
        scrollFire: 'materialize/js/scrollFire',
        transitions: 'materialize/js/transitions',
        'jquery.hammer': 'materialize/js/jquery.hammer',
        materialize: 'materialize/bin/materialize',
        picturefill: 'picturefill/dist/picturefill'
    },
    shim: {
        'jquery.easing': {
            deps: [
                'jquery'
            ]
        },
        animation: {
            deps: [
                'jquery'
            ]
        },
        'jquery.hammer': {
            deps: [
                'jquery',
                'hammerjs',
                'waves'
            ]
        },
        global: {
            deps: [
                'jquery'
            ]
        },
        toasts: {
            deps: [
                'global'
            ]
        },
        collapsible: {
            deps: [
                'jquery'
            ]
        },
        dropdown: {
            deps: [
                'jquery'
            ]
        },
        leanModal: {
            deps: [
                'jquery'
            ]
        },
        materialbox: {
            deps: [
                'jquery'
            ]
        },
        parallax: {
            deps: [
                'jquery'
            ]
        },
        tabs: {
            deps: [
                'jquery'
            ]
        },
        tooltip: {
            deps: [
                'jquery'
            ]
        },
        sideNav: {
            deps: [
                'jquery'
            ]
        },
        scrollspy: {
            deps: [
                'jquery'
            ]
        },
        forms: {
            deps: [
                'jquery',
                'global'
            ]
        },
        slider: {
            deps: [
                'jquery'
            ]
        },
        cards: {
            deps: [
                'jquery'
            ]
        },
        pushpin: {
            deps: [
                'jquery'
            ]
        },
        buttons: {
            deps: [
                'jquery'
            ]
        },
        transitions: {
            deps: [
                'jquery',
                'scrollFire'
            ]
        },
        scrollFire: {
            deps: [
                'jquery',
                'global'
            ]
        },
        waves: {
            exports: 'Waves'
        },
        character_counter: {
            deps: [
                'jquery'
            ]
        },
        velocity: {
            deps: [
                'jquery'
            ]
        },
        jquery: {
            exports: '$'
        }
    },
    packages: [

    ]
};
