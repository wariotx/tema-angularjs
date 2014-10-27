/**
 * Created by Leopoldo on 15/10/2014.
 */
var auth = angular.module('AuthSrvc',[]);

auth.factory('Login',function($http,$sanitize,CSRF_TOKEN){
    var sanitizeCredentials = function(credentials) {
        return {
            name: $sanitize(credentials.name),
            password: $sanitize(credentials.password),
            csrf_token: CSRF_TOKEN
        };
    };
    return{
        auth:function(credentials){
            var authUser = $http({method:'POST',url:'api/login/auth',params:sanitizeCredentials(credentials)});
            return authUser;
        },
        logout:function(){
            var authUser = $http({method:'GET',url:'api/login/destroy'});
            return authUser;
        }
    }
});
auth.factory('SessionService',function(){
    return{
        get:function(key){
            return sessionStorage.getItem(key);
        },
        set:function(key,val){
            return sessionStorage.setItem(key,val);
        },
        unset:function(key){
            return sessionStorage.removeItem(key);
        }
    }
});