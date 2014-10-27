/**
 * Created by Leopoldo on 16/10/2014.
 */
var flash = angular.module('FlashCtrl',[]);

flash.controller('FlashController', function ($scope, FlashService) {
    $scope.alerts = FlashService.alerts;
    $scope.addAlert = function() {
        FlashService.show({msg:'assd',type:'warning'});
    };

    $scope.closeAlert = function(index) {
        FlashService.close(index);
    };
});