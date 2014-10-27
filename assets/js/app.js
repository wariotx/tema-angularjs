/**
 * Created by Leopoldo on 15/10/2014.
 */
var app = angular.module('juegoApp',[
    'ngRoute',
    //Login
    'LoginCtrl',
    //AuthService
    'AuthSrvc',
    'FlashSrvc',
    'FlashCtrl',
    'MenuCtrl',
    'ngSanitize',
    'ui.bootstrap',
    'ui.router'
]);

app.run(function(){

});

//This will handle all of our routing
/*
app.config(function($routeProvider, $locationProvider){
    $routeProvider.when('/',{
        templateUrl:'assets/js/templates/login.html',
        controller:'LoginController'
    });
});*/
app.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider

        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: 'assets/js/templates/login.html',
            controller:'LoginController'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('about', {
            // we'll get to this in a bit
        });

})