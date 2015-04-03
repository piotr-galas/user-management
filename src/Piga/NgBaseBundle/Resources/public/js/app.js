'use strict';

/* App Module */

var symfonyApp = angular.module('symfonyApp', [
    'ngRoute',
    'symfonyControllers',
    'symfonyDirectives',
    'symfonyServices'
]);

symfonyApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/login',{
                templateUrl: Routing.generate('override_fos_user_security_login'),
                controller: 'LoginCtrl'
            }).
            when('/register',{
                templateUrl: Routing.generate('override_fos_user_registration_register'),
                controller: 'RegisterCtrl'
            }).
            when('/phones', {
                templateUrl: '../../bundles/pigangbase/partials/demo.html',
                controller: 'DemoCtrl'
            }).
            when('/sample_array', {
                templateUrl: '../../bundles/pigangbase/partials/sample_array.html',
                controller: 'Demo2Ctrl'
            }).

            when('/form', {
                templateUrl: '../../bundles/pigangbase/partials/form.html',
                controller: 'FormCtrl'
            }).
            otherwise({
                redirectTo: '/phones'
            });
    }]);