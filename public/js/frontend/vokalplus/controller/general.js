 var baseURL = "http://localhost/ci/vokalplus/";
 var vokalplusApp = angular.module('vokalplusApp',["mm.foundation"]);
 
vokalplusApp.controller('HeaderController', function($scope,$http,$timeout,$modal,$interval) {	
	$scope.login_modal= function () {
		    var modalInstance = $modal.open({
	    		templateUrl: 'login-modal.tpl',
	    		windowClass: 'account-popup reveal-modal',
				controller: 'LoginController',
		    });
	};
	$scope.register_modal= function () {
		    var modalInstance = $modal.open({
		    	templateUrl: 'register-modal.tpl',
		    	windowClass: 'account-popup reveal-modal',
				controller: 'RegisterController',
		    });
	};

});
vokalplusApp.controller('LoginController', function($scope,$http,$modalInstance,$modal) {
    	$scope.register_modal= function () {
					$modalInstance.close();
				    var modalInstance = $modal.open({
				    	templateUrl: 'register-modal.tpl',
				    	windowClass: 'account-popup reveal-modal',
      					controller: 'RegisterController',
				    });
				};

        $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
		};

		$scope.sendForm = function(dataLogin){
			console.log(dataLogin);
		};

    });
vokalplusApp.controller('RegisterController', function($scope,$http,$modalInstance,$modal) {
    	
        $scope.login_modal= function () {
					$modalInstance.close();
				    var modalInstance = $modal.open({
				    	templateUrl: 'login-modal.tpl',
				    	windowClass: 'account-popup reveal-modal',
      					controller: 'LoginController',	
				    });
				};
       
        $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			};

		$scope.sendForm = function(dataRegister){
			console.log(dataRegister);
		};



    });
	
		