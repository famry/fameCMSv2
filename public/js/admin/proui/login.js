 fameAdminApp.controller('LoginCtrl', function($scope,$http) {
   $scope.action = 'login';
   $scope.loading = false;
    $scope.LoginAuth = function(loginData) {
   		$scope.loading = true;

    	//var test = JSON.stringify(loginData)
    	$http({
		 method: 'POST',
		 url: baseUrl+'administrator/auth_login',
		 headers: {'Content-Type': 'application/json'},
		 data: JSON.stringify(loginData),
		 }).success(function (data , status, headers, cfg) {
		 if(data.status == 'success'){
			 window.location.href = baseUrl+'administrator';
		 }else{
		 	//alert('failed');
		 	$scope.loginMsg = data.message;
		 	$scope.loading = false;
		 }
		 })
		 .error(function(data, status, headers, cfg) {
	      $scope.loginMsg = 'There was a network error. Try again later.';
	      $scope.loading = false;
	     });
    };
     $scope.ForgetPass = function(email) {
      $scope.loading = true;
     
    };
    $scope.RegisterAuth = function(regData) {
      $scope.loading3 = true;
      $http({
       method: 'POST',
       url: baseUrl+'administrator/auth_register',
       headers: {'Content-Type': 'application/json'},
       data: JSON.stringify(regData),
       }).success(function (data , status, headers, cfg) {
       if(data.status == 'success'){
         //window.location.href = baseUrl+'administrator';
         alert(data.message);
         window.location.href = baseUrl+'administrator';
       }else{
        $scope.message = data.message;
        $scope.loading3 = false;
       }
     })
     .error(function(data, status, headers, cfg) {
        $scope.message = 'There was a network error. Try again later.';
        $scope.loading3 = false;
       });
    };
 });
