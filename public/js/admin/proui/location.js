 fameAdminApp.controller('ManageCountryCtrl', function($scope,$http,$modal,$window) {
 	
 	$scope.newCountryModal = function (size) {

    var modalInstance = $modal.open({
      animation: true,
      templateUrl: 'country-modal-add.tpl',
      controller: 'addCountryCtrl',
      size: size
    });
 	};

 	$scope.editCountryModal = function (id) {

    var modalInstance2 = $modal.open({
      animation: true,
      templateUrl: 'country-modal-edit.tpl',
      controller: 'editCountryCtrl',
      size: 'lg',
      resolve: {
	        id: function () {
	          return id;
	        }
    	}
    });
	};
 })
 fameAdminApp.controller('addCountryCtrl', function($scope,$http,$modalInstance) {
 	$scope.newdataCountry = {};
 	$scope.options_publish = [{
	  name: 'Visible',
	  value: '0'
	}, {
	  name: 'Invisible',
	  value: '1'
	}];
	$scope.newdataCountry.publish = $scope.options_publish[0].value;
	$scope.cancel = function () {
	    $modalInstance.dismiss('cancel');
	};
 	
   	$scope.addnewcountry = function(dataNewCountry){
	   	$scope.inProgress = true;
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/location/add_country',
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(dataNewCountry),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       alert(data.message);
	       window.location.href= baseUrl+"administrator/location";
	    }else{
	      alert(data.message);
	      $scope.inProgress = false;
	    }
	    })
	    .error(function(data, status, headers, cfg) {
	        alert('There was a network error. Try again later.');
	        $scope.inProgress = false;
	       });
   	};

});
fameAdminApp.controller('editCountryCtrl', function($scope,$http,$modalInstance,id) {
 	$scope.editdataCountry = {};
 	$scope.options_publish = [{
	  name: 'Visible',
	  value: '0'
	}, {
	  name: 'Invisible',
	  value: '1'
	}];
	$scope.get_data_country = $http.get(baseUrl+'administrator/location/getOldData/'+id).
 			success(function(data) {
 					$scope.editdataCountry = data[0];
			})
 			.error(function(data, status) {
               alert("Error !! Please try again later!!");
            });
	$scope.cancel = function () {
	    $modalInstance.dismiss('cancel');
	};
 	
 	
   	$scope.updatecountry = function(dataOldCountry){
	   	$scope.inProgress2 = true;
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/location/update_country/'+id,
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(dataOldCountry),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       alert(data.message);
	       window.location.href= baseUrl+"administrator/location";
	    }else{
	      alert(data.message);
	      $scope.inProgress2 = false;
	    }
	    })
	    .error(function(data, status, headers, cfg) {
	        alert('There was a network error. Try again later.');
	        $scope.inProgress2 = false;
	       });
   	};

});