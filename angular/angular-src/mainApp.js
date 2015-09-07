var vividKodaChromes=angular.module("vividkoda",['coreModule','ui.bootstrap']);

vividKodaChromes.controller("contact_form_controller",function($scope,$http){
	$scope.submitQuery=function(){
		//console.log("message............."+ $scope.query.message);
	/*	app.controller('sign_up', function ($scope, $http) {*/
/*
* This method will be called on click event of button.
* Here we will read the email and password value and call our PHP file.
*/
/*$scope.check_credentials = function () {

document.getElementById("message").textContent = "";*/

var request = $http({
    method: "post",
    url: window.location.href + "service/vividService.php",
    data: {
    	name:$scope.query.name,
        email: $scope.query.email,
        c_number:$scope.query.c_number,
        shoot_date:$scope.query.shoot_date,
        message:$scope.query.message,
        
    },
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
});

/* Check whether the HTTP Request is successful or not. */
request.success(function (data) {
    document.getElementById("msg").textContent = "You have login successfully with email "+data;
});
}
});
	


