/**
 * Created by Leopoldo on 15/10/2014.
 */
var login = angular.module('LoginCtrl',[]);

login.controller('LoginController',function($scope, Login, SessionService, FlashService){
    $scope.loginData = {
        name: '',
        password: ''
    };
    var cacheSession = function() {
        SessionService.set('authenticated', true);
    };
    var uncacheSession = function() {
        SessionService.unset('authenticated');
    };
    var loginFlash = function(response) {
        FlashService.show(response.flash);
    };
    $scope.loginSubmit = function(){
        FlashService.clear();
        var auth = Login.auth($scope.loginData);
        $scope.loginData.password = '';
        auth.success(function(response){
            if(response.data) {
                $scope.loginData.name = '';
                cacheSession();
            }
            loginFlash(response);
        });
        auth.error(loginFlash);
    }
});