angular.module("coreModule",[]).controller("core_controller",function($scope,$rootScope,$modal){

  $scope.shownavMenu=false;
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
        console.log(' cancel Modal dismissed at: ' + new Date());
    });
//       
    };
     
  $scope.ulclick=function(clickType){
   /* console.log("iside ...function(clickType)");
    if(clickType === "btn" &&  $scope.shownavMenu === false){
        console.log("iside ...clickType === btn &&  $scope.shownavMenu === false");
         $scope.shownavMenu=true;
    }else if(clickType === "btn" &&  $scope.shownavMenu === true){
        console.log("iside ...else if(clickType === btn &&  $scope.shownavMenu === true");
        $scope.shownavMenu = false;
    }
*/
    if(clickType ==="list" && $scope.shownavMenu === true){
        console.log("inside ...clickType ===list" );
        //document.getElementById("navbarCollapse").style.visibility = "hidden";
        $scope.shownavMenu=false;

    }
  };
  
$scope.changeshow=function(){
    console.log("-----"+$scope.shownavMenu);
    if( $scope.shownavMenu===true){
         $scope.shownavMenu=false;

    }
    if( $scope.shownavMenu===false){
        $scope.shownavMenu=true;
       
       // document.getElementById("navbarCollapse").style.className = " navbar-collapse collapse in";
    }
    }
    
   
  // document.getElementById("navbarCollapse").style.visibility = "visible"; 



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