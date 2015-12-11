var fameAdminApp = angular.module('fameAdmin', ['ui.bootstrap','angularMoment','ui.tinymce','naif.base64','ngImgCrop']);
var baseUrl = "http://localhost/fame/default/";
fameAdminApp.factory('profile', function($http){
 		return {
 			getDataProfile: function(id) {
		         return $http.get(baseUrl+'administrator/getDataProfile');
		    }
		  };
 });
  fameAdminApp.controller('defaultCtrl', function($scope,$http,profile) {
    $scope.$on('profile:update', function(event, data) {
        //var jsondata = JSON.parse(data);
                $scope.dataadmin = data;
                //console.log($scope.thismember.picture);
            });
   	var getpromise = profile.getDataProfile();
       getpromise.then(
          function(payload) { 
              $scope.dataadmin = payload.data[0];
          },
          function(errorPayload) {
          	  console.log('failure loading data admin');
          });
    $scope.UpdateProfile = function(profileData) {
      $scope.profileLoader = true;
      $http({
     method: 'POST',
     url: baseUrl+'administrator/setting/profile_update',
     headers: {'Content-Type': 'application/json'},
     data: JSON.stringify(profileData),
     }).success(function (data , status, headers, cfg) {
     if(data.status == 'success'){
       alert(data.message);
       window.location.href = baseUrl+'administrator/setting/profile';
     }else{
      alert(data.message);
      //$scope.loginMsg = data.message;
      $scope.profileLoader = false;
     }
     })
     .error(function(data, status, headers, cfg) {
        alert('There was a network error. Try again later.');
        $scope.profileLoader = false;
       });
    };
	 });
