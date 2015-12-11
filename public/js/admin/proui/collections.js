fameAdminApp.controller('ManageCollectionsCtrl', function($scope,$http){
$scope.dataForm = {};
$scope.EditDataModal = function(id){
waitingDialog.show('Please Wait...');
$scope.get_data_collection = $http.get(baseUrl+'administrator/collections/getOldData/'+id).
    success(function(data) {
        waitingDialog.hide();
        $scope.dataForm = data[0];
        $('#edit-collection-modal').modal('show');
    })
    .error(function(data, status) {
        waitingDialog.hide();
        alert("Error !! Please try again later!!");
    });
};
});

fameAdminApp.controller('EditCollectionsCtrl', function($scope,$http){
	$scope.tinymceOptions = {
		skin: 'lightgray',
		theme : 'modern',
		height : 200
	};
});


fameAdminApp.controller('ManageProdCollectionsCtrl', function($scope,$http,$timeout){
$scope.dataForm = {};
$scope.AddDataModal = function(){
waitingDialog.show('Please Wait...');
$timeout(function() {
        waitingDialog.hide();
		$('#add-product-modal').modal('show');
    }, 3000);
};	
$scope.EditDataModal = function(id){

};
$scope.DeletePermanent = function(id){

};
});

fameAdminApp.controller('AddProductCtrl', function($scope,$http){
	$scope.dataForm.publish = 'active';
	$scope.tinymceOptions = {
		skin: 'lightgray',
		theme : 'modern',
		height : 200
	};
});
