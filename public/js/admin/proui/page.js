 fameAdminApp.controller('ManagePageCtrl', function($scope,$http,$window) {
	// Action Delete
	$scope.deleteAction = function(id){
		if($window.confirm('This page will be going to trash.Continue??')) {
		waitingDialog.show('Please Wait...');
	        $http({
		    method: 'POST',
		    url: baseUrl+'administrator/page/delete_data/'+id,
		    headers: {'Content-Type': 'application/json'},
		    })
		    .success(function (data , status, headers, cfg) {
		    if(data.status == 'success'){
				waitingDialog.show(data.message);
				window.location.href= baseUrl+"administrator/page";
		    }else{
				waitingDialog.hide();
				alert(data.message);
		    }
		    })
		    .error(function(data, status, headers, cfg) {
				waitingDialog.hide();
		        alert('There was a network error. Try again later.');
		       });
	      } else {
	      	alert('Deleting page has been canceled!!');
	      }
	};
	//Action Restore
	$scope.restoreAction = function(id){
		if($window.confirm('This page will be restore.Continue??')) {
		waitingDialog.show('Please Wait...');
	        $http({
		    method: 'POST',
		    url: baseUrl+'administrator/page/restore_data/'+id,
		    headers: {'Content-Type': 'application/json'},
		    })
		    .success(function (data , status, headers, cfg) {
		    if(data.status == 'success'){
		       waitingDialog.show(data.message);
		       window.location.href= baseUrl+"administrator/page/trash";
		    }else{
				waitingDialog.hide();
				alert(data.message);
		    }
		    })
		    .error(function(data, status, headers, cfg) {
				waitingDialog.hide();
		        alert('There was a network error. Try again later.');
		       });
	      } else {
	      	alert('Restoring page has been canceled!!');
	      }
	};
	//Action Delete Permanent
	$scope.deletePermanentAction = function(id){
		if($window.confirm("This page will be delete permanently and can't be restored.Continue??")) {
		waitingDialog.show('Please Wait...');
	        $http({
		    method: 'POST',
		    url: baseUrl+'administrator/page/delete_permanent_data/'+id,
		    headers: {'Content-Type': 'application/json'},
		    })
		    .success(function (data , status, headers, cfg) {
		    if(data.status == 'success'){
				waitingDialog.show(data.message);
				window.location.href= baseUrl+"administrator/page/trash";
		    }else{
				waitingDialog.hide();
				alert(data.message);
		    }
		    })
		    .error(function(data, status, headers, cfg) {
				waitingDialog.hide();
		        alert('There was a network error. Try again later.');
		       });
	      } else {
	      	alert('Deleting permanent page has been canceled!!');
	      }
	};
 })
 fameAdminApp.controller('AddPageCtrl', function($scope,$http) {
	$scope.dataForm = {};
	// Init TinyMCE Options
	$scope.tinymceOptions = {
    skin: 'lightgray',
    theme : 'modern',
	height: '300'
  	};
	// Init default dropdown value
	$scope.dataForm.custom_seo = '0';
	$scope.dataForm.seo_index = 'index';
	$scope.dataForm.seo_follow = 'follow';
	
	$scope.dataForm.publish = 'publish';
	$scope.dataForm.custom_date = 'now';
	$scope.dataForm.parent = '0';
	$scope.dataForm.sidebar = 'no-sidebar';
	$scope.dataForm.sidebar_name = '';
	$scope.dataForm.comment = 'close';
	
	$scope.buttonAdd = function(newData){
	waitingDialog.show('Please Wait...');
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/page/input_data',
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(newData),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       waitingDialog.show(data.message);
	       window.location.href= baseUrl+"administrator/page";
	    }else{
		  waitingDialog.hide();
	      alert(data.message);
	    }
	    })
	    .error(function(data, status, headers, cfg) {
			waitingDialog.hide();
	        alert('There was a network error. Try again later.');
	       });
   	};
 });
fameAdminApp.controller('EditPageCtrl', function($scope,$http) {
	$scope.dataForm = {}; 
	// Init TinyMCE Options
	$scope.tinymceOptions = {
    skin: 'lightgray',
    theme : 'modern',
	height: '300'
  	};
	
	angular.element(document).ready(function () {
	waitingDialog.show('Please Wait...');
      $scope.get_old_data = $http.get(baseUrl+'administrator/page/getOldData/'+$scope.id_page).
		success(function(data) {
				waitingDialog.hide();
				$scope.dataForm = data[0];
				$scope.dataForm.publish_date = moment(data[0].publish_date).format('MMMM Do YYYY');
				
		})
		.error(function(data, status) {
			waitingDialog.hide();
			alert("Error !! Please try again later!!");
		});
    });
	
	$scope.buttonUpdate = function(oldData){
	//console.log(oldData);
	waitingDialog.show('Please Wait...');
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/page/update_data',
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(oldData),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       waitingDialog.show(data.message);
	       window.location.href= baseUrl+"administrator/page/edit/"+oldData.id_post+'?update=success';
	    }else{
		  waitingDialog.hide();
	      alert(data.message);
	    }
	    })
	    .error(function(data, status, headers, cfg) {
			waitingDialog.hide();
	        alert('There was a network error. Try again later.');
	       });
   	};
})