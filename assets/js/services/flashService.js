/**
 * Created by Leopoldo on 16/10/2014.
 */
var flash = angular.module('FlashSrvc',[]);

flash.factory("FlashService", function() {
    var alerts = [
        /*{ type: 'danger', msg: 'Oh snap! Change a few things up and try submitting again.' },
        { type: 'success', msg: 'Well done! You successfully read this important alert message.' }*/
    ];
    return {
        alerts: alerts,
        show: function(message) {
            alerts.push({msg: message.msg,type: message.type});
        },
        clear: function() {
            alerts.splice(0, alerts.length);
        },

        close : function(index) {
            alerts.splice(index, 1);
        }
    }
});