 fameAdminApp.controller('ManageWidgetCtrl', function($scope,$http,$modal,$window) {
 	
 	$scope.newWidgetModal = function (size) {

    var modalInstance = $modal.open({
      animation: true,
      templateUrl: 'widget-modal-add.tpl',
      controller: 'addWidgetCtrl',
      size: size
    });
 	};

 	$scope.editWidgetModal = function (id) {

    var modalInstance2 = $modal.open({
      animation: true,
      templateUrl: 'widget-modal-edit.tpl',
      controller: 'editWidgetCtrl',
      size: 'lg',
      resolve: {
	        id: function () {
	          return id;
	        }
    	}
    });
	};
	
	$scope.deletePermanentWidgetAction = function(id){
		if($window.confirm("This widget will be delete permanently and can't be restored.Continue??")) {
	        $http({
		    method: 'POST',
		    url: baseUrl+'administrator/widget/delete_permanent/'+id,
		    headers: {'Content-Type': 'application/json'},
		    })
		    .success(function (data , status, headers, cfg) {
		    if(data.status == 'success'){
		       alert(data.message);
		       window.location.href= baseUrl+"administrator/genre/";
		    }else{
		      alert(data.message);
		    }
		    })
		    .error(function(data, status, headers, cfg) {
		        alert('There was a network error. Try again later.');
		       });
	      } else {
	      	alert('Deleting permanent widget has been canceled!!');
	      }
	};
 })
 fameAdminApp.controller('addWidgetCtrl', function($scope,$http,$modalInstance) {
 	$scope.newdataWidget = {};
 	$scope.tinymceOptions = {
    onChange: function(e) {
      // put logic here for keypress and cut/paste changes
    },
    inline: false,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons paste textcolor"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "print preview media | forecolor backcolor emoticons | link image",
    image_advtab: true,
    skin: 'lightgray',
    theme : 'modern'
  	};
	$scope.cancel = function () {
	    $modalInstance.dismiss('cancel');
	};
 	
   	$scope.addnewwidget = function(dataNewWidget){
	   	$scope.inProgress = true;
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/widget/add',
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(dataNewWidget),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       alert(data.message);
	       window.location.href= baseUrl+"administrator/widget";
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
fameAdminApp.controller('editWidgetCtrl', function($scope,$http,$modalInstance,id) {
 	$scope.editdataWidget = {};
 	$scope.tinymceOptions = {
    onChange: function(e) {
      // put logic here for keypress and cut/paste changes
    },
    inline: false,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons paste textcolor"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
    toolbar2: "print preview media | forecolor backcolor emoticons | link image",
    image_advtab: true,
    skin: 'lightgray',
    theme : 'modern'
  	};
	$scope.get_data_genre = $http.get(baseUrl+'administrator/widget/getOldData/'+id).
 			success(function(data) {
 					$scope.editdataWidget = data[0];
			})
 			.error(function(data, status) {
               alert("Error !! Please try again later!!");
            });
	$scope.cancel = function () {
	    $modalInstance.dismiss('cancel');
	};
 	
 	
   	$scope.updatewidget = function(dataOldWidget){
	   	$scope.inProgress2 = true;
	    $http({
	    method: 'POST',
	    url: baseUrl+'administrator/widget/update/'+id,
	    headers: {'Content-Type': 'application/json'},
	    data: JSON.stringify(dataOldWidget),
	    })
	    .success(function (data , status, headers, cfg) {
	    if(data.status == 'success'){
	       alert(data.message);
	       window.location.href= baseUrl+"administrator/widget";
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