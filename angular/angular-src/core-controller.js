angular.module("coreModule",[]).controller("core_controller",function($scope,$rootScope,$modal){

  
    $scope.toggleModal = function (modelName) {
        var modalInstance = $modal.open({
        templateUrl: 'core/'+modelName+'.php',
        scope: $scope,
        backdrop: 'static',
        resolve: {
            '$modalInstance': function () {
                return function () {
                    return modalInstance;
                };
            }
        }
    });
    modalInstance.result.then(function (response) {
        console.log(response)
        if (response === 'yes') {
          
        }
        if (response === 'no') {

        }
    }, function () {
        console.log('cancel Modal dismissed at: ' + new Date());
    });
//       
    };
     
  

});

/*$(document).ready(function() {
  var placeholder = null;
  $('input[type=text]').focus(function() {
    placeholder = $(this).attr("placeholder");
    $(this).attr("placeholder", "");
  });
  $('input[type=text]').blur(function() {
    $(this).attr("placeholder", placeholder);
  });
});*/