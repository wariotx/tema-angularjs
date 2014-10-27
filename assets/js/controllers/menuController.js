/**
 * Created by Leopoldo on 17/10/2014.
 */
var menu = angular.module('MenuCtrl',[]);

menu.controller('MenuController',function($scope,SessionService,FlashService,Login){
    var uncacheSession = function() {
        SessionService.unset('authenticated');
    };
    var loginFlash = function(response) {
        if(response.error){
            var flash = {msg:response.error.type,type:'danger'};
            FlashService.show(flash);
        }
        if(response.flash) {
            FlashService.show(response.flash);
        }
    };
    $scope.status = {
        open: false
    };
    $scope.toggled = function(open) {
        console.log('Dropdown is now: ', open);
    };
    $scope.logout = function(){
        FlashService.clear();
        var auth = Login.logout();
        auth.success(function(response){
            if(response.data) {
                uncacheSession();
            }
            loginFlash(response);
        });
        auth.error(loginFlash);
    }
});