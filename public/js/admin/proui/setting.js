fameAdminApp.controller('changeDpCtrl', function ($scope) {
	$scope.myImage='';
    $scope.myCroppedImage='';

    var handleFileSelect=function(evt) {
      var file=evt.currentTarget.files[0];
      var reader = new FileReader();
      reader.onload = function (evt) {
        $scope.$apply(function($scope){
          $scope.myImage=evt.target.result;
        });
      };
      reader.readAsDataURL(file);
    };
    angular.element(document.querySelector('#file-dpimg')).on('change',handleFileSelect);

        
		
	$scope.submitForm = function() {
		$('#thumbDP').attr('src',$scope.myCroppedImage);
		$scope.dataadmin.crop_picture = $scope.myCroppedImage;
  		
  		$('#changeDP-modal').modal('hide');
	    };
});

fameAdminApp.controller('SettingCtrl', function($scope,$http){
$scope.setting = {};
$scope.GeneralSettingModal = function(){
waitingDialog.show('Please Wait...');
$scope.get_data_setting = $http.get(baseUrl+'administrator/setting/getGeneralSetting/').
    success(function(data) {
        waitingDialog.hide();
        $scope.setting = data[0];
        $('#general-setting-modal').modal('show');
    })
    .error(function(data, status) {
        waitingDialog.hide();
        alert("Error !! Please try again later!!");
    });
};

$scope.CustomSettingModal = function(){
waitingDialog.show('Please Wait...');
$scope.get_data_setting = $http.get(baseUrl+'administrator/setting/getCustomSetting/').
    success(function(data) {
        waitingDialog.hide();
        $scope.setting = data[0];
        $('#custom-setting-modal').modal('show');
    })
    .error(function(data, status) {
        waitingDialog.hide();
        alert("Error !! Please try again later!!");
    });
};
});

fameAdminApp.controller('GeneralSettingCtrl', function($scope,$http,$timeout){

$scope.updateForm = function(oldData){
    waitingDialog.show('Please Wait...');
    $http({
          method: 'POST',
          url: baseUrl+'administrator/setting/general_setting_update',
          headers: {'Content-Type': 'application/json'},
          data: JSON.stringify(oldData),
          })
          .success(function (data , status, headers, cfg) {
          if(data.status == 'success'){
            $timeout( function(){ 
            waitingDialog.show(data.message);  
            window.location.href= baseUrl+"administrator/setting";
               }, 3000);

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

fameAdminApp.controller('SocnetSettingCtrl', function($scope,$http,$timeout){
$scope.updateForm = function(oldData){
    waitingDialog.show('Please Wait...');
    $http({
          method: 'POST',
          url: baseUrl+'administrator/setting/socnet_setting_update',
          headers: {'Content-Type': 'application/json'},
          data: JSON.stringify(oldData),
          })
          .success(function (data , status, headers, cfg) {
          if(data.status == 'success'){
            $timeout( function(){ 
            waitingDialog.show(data.message);  
            window.location.href= baseUrl+"administrator/setting";
               }, 3000);

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

fameAdminApp.controller('CustomSettingCtrl', function($scope,$http,$timeout){
$scope.updateForm = function(oldData){
    waitingDialog.show('Please Wait...');
    $http({
          method: 'POST',
          url: baseUrl+'administrator/setting/custom_setting_update',
          headers: {'Content-Type': 'application/json'},
          data: JSON.stringify(oldData),
          })
          .success(function (data , status, headers, cfg) {
          if(data.status == 'success'){
            $timeout( function(){ 
            waitingDialog.show(data.message);  
            window.location.href= baseUrl+"administrator/setting";
               }, 3000);

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