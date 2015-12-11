 var baseURL = "http://localhost/php/vp/";
 var vokalplusApp = angular.module('vokalplusApp',["angucomplete-alt","ngImgCrop","naif.base64","mm.foundation","ui.tinymce","angularMoment"]);
 vokalplusApp.factory('socket', function ($rootScope,$timeout) {
		var safeApply = function(scope, fn) {
	      if (scope.$$phase) {
	        fn(); // digest already in progress, just run the function
	      } else {
	        scope.$apply(fn); // no digest in progress, run with $apply
	      }
	    };
		  var socket = io.connect('http://localhost:3000');
		  return {
		    on: function (eventName, callback) {
		      socket.on(eventName, function () {  
		        var args = arguments;
		        safeApply($rootScope, function () {
		          callback.apply(socket, args);
		        });
		      });
		    },
		    emit: function (eventName, data, callback) {
		      socket.emit(eventName, data, function () {
		        var args = arguments;
		        safeApply($rootScope, function () {
		          if (callback) {
		            callback.apply(socket, args);
		          }
		        });
		      })
		    },
		    removeAllListeners: function (eventName, callback) {
	          socket.removeAllListeners(eventName, function() {
	              var args = arguments;
	              safeApply($rootScope, function () {
	                callback.apply(socket, args);
		              });
		          }); 
	      		}
		  };
		});
 	vokalplusApp.factory('notification', function($http){
 		return {
 			getNotification: function(id,limit) {
		         return $http.get(baseURL+'getdata/notifications/' +'?id='+id+'&limit='+limit);
		    }
		  };
 	});
 	vokalplusApp.controller('generalCtrl', function($scope,$http) {
 		//$scope.$on('someEvent', function(event, data) { console.log(data); });
 		
 		
		/*socket.on('login:auth', function (data) {
	     	console.log(data.username+" "+data.msg);
	        })*/
 	});
 	vokalplusApp.controller('HeaderController', function($scope,$http,$timeout,$modal,socket,notification,$interval) {
 		angular.element(document).ready(function () {

 			/*$scope.idnow = $scope.cache_id;
 			$scope.namenow = $scope.cache_displayname;
 			$scope.usernamenow = $scope.cache_username;
 			$scope.picnow = $scope.cache_picture;*/
 			var m_id = $scope.cache_id;
 			if (m_id != 'undefined'){
 			var countNotif = $interval(function() {
 				$http.get(baseURL+'getdata/notif_count/' + m_id)
			    .success(function(data) {
			    	$scope.notifcount = data;
			    })
			},5000);
			} else {
			var countNotif = function() {
					//console.log('blank');
				};
			}
			});
 		$scope.modal_message = function() {
 				$http.get(baseURL+'getdata/senderlist/')
			    .success(function(data) {
			    	$scope.senderlists = data;
				    $scope.SelectedSender = data[0].id_sender;
			    	$http.get(baseURL+'getdata/messagelist?id_sender='+$scope.senderlists[0].id_sender)
				    .success(function(data) {
				    	$scope.messagelists = data;
				    	$('#messages').foundation('reveal', 'open');
				 });
					
			    })
			    

		   };
		

 		$scope.getNotification = function(id) {
		       var promise = 
		           notification.getNotification(id,5);
		       promise.then(
		          function(payload) { 
		              $scope.listingNotif = payload.data;
		          },
		          function(errorPayload) {
		          	  console.log('failure loading notification');
		              //$log.error('failure loading movie', errorPayload);
		          });
		   }; 
 		socket.on('notification:follow',function(data){
 			//$scope.getNotification(data.id_sender);
        	//console.log('follow');
        });

        socket.on('notification:count',function(data){
 			
        });

		$scope.login_modal= function () {
					    var modalInstance = $modal.open({
					      templateUrl: 'login-modal.html',
					      windowClass: 'account-popup reveal-modal',
	      				  controller: 'LoginController',
					    });
				};
		$scope.register_modal= function () {
					    var modalInstance = $modal.open({
					      templateUrl: 'register-modal.html',
					      windowClass: 'account-popup reveal-modal',
	      				  controller: 'RegisterController',
					    });
				};
		
		

	});
 // create angular controller
  	vokalplusApp.controller('LoginController', function($scope,$http,$modalInstance,$modal,socket) {
    	$scope.register_modal= function () {
    					$modalInstance.close();
					    var modalInstance = $modal.open({
					      templateUrl: 'register-modal.html',
					      windowClass: 'account-popup reveal-modal',
	      				  controller: 'RegisterController',
					    });
				};
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {

        	var email= loginForm.elements["email"].value;
        	var password= loginForm.elements["password"].value;
        	$scope.submitted = true;
        	//console.log("posting data login....");
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'member/login',
			 headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({email: email,password:password})
			 }).success(function (data, status, headers, cfg) {
			 if(data.status == 'success'){
			 	socket.emit('channel:login',
	 			{
	 				'email': email,
					'msg': 'has been login!',
				});
			 window.location.href = baseURL+data.username;	
			 }else{
			  $scope.message = data.message;
			 }
			 })
			 .error(function(data, status, headers, cfg) {
		      $scope.message = 'There was a network error. Try again later.';
		    });
        };
         $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			  };

    });

	 // create angular controller
    vokalplusApp.controller('RegisterController', function($scope,$http,$modalInstance,$modal) {
    	
        $scope.login_modal= function () {
    					$modalInstance.close();
					    var modalInstance = $modal.open({
					      templateUrl: 'login-modal.html',
					      windowClass: 'account-popup reveal-modal',
	      				  controller: 'LoginController',
					    });
				};
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	var email= registerForm.elements["email"].value;
        	var password= registerForm.elements["password"].value;
        	$scope.submitted = true;
        	//console.log("posting data registration....");
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'member/register',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({email: email,password:password})
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 $modalInstance.close();
			 	 //$('#account-register-email').foundation('reveal', 'close');
			 	 document.getElementById('get-email').value=email;
			 	 $('#account-register-validate').foundation('reveal', 'open');
				 //document.getElementById("form_register").reset();
			 }else{
			  $scope.message = data.message;
			 }
			 })
			 .error(function(data, status, headers, cfg) {
		      $scope.message = 'There was a network error. Try again later.';
		     });
        };
         $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			  };



    });
	 // create angular controller
    vokalplusApp.controller('ValCodeController', function($scope,$http) {
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting data validation code....");
        	$scope.email = document.getElementById('get-email').value;
        	$http({
			 method: 'POST',
			 url: baseURL+'member/validate_reg',
			 headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({email: $scope.email,code:$scope.val_code})
			 }).success(function (data, status, headers, cfg) {
			 if(data.status == 'success'){
		 	 $('#account-register-validate').foundation('reveal', 'close');
		 	  document.getElementById('email-lastreg').value=$scope.email;
		 	 $('#account-register-last-step').foundation('reveal', 'open');
			 document.getElementById("validate_reg").reset();
			 }else{
			  $scope.message = data.message;
			 }
			 })
			 .error(function(data, status, headers, cfg) {
		      $scope.message = 'There was a network error. Try again later.';
		    });
            // check to make sure the form is completely valid
           // if ($scope.loginForm.$valid) {
				//alert('our form is amazing');
			//}
        };

    });
 // create angular controller
    vokalplusApp.controller('LastStepController', function($scope,$http) {
        // function to submit the form after all validation has occurred 
        $scope.artistsNum = [ "1","2","3","4","5","6","7","8","9","10" ];           
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting data last registration code....");
        	$scope.email = document.getElementById('email-lastreg').value;
        	$http({
			 method: 'POST',
			 url: baseURL+'member/second_reg',
			 headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({username: $scope.username,name:$scope.profile_name,email:$scope.email})
			 }).success(function (data, status, headers, cfg) {
			 if(data.status == 'success'){	
			 window.location.href = baseURL+data.username;	
			 }else{
			  $scope.message = data.message;
			 }
			 })
			 .error(function(data, status, headers, cfg) {
		      $scope.message = 'There was a network error. Try again later.';
		    });
            // check to make sure the form is completely valid
           // if ($scope.loginForm.$valid) {
				//alert('our form is amazing');
			//}
        };

    });
	
	// Email Exist
	vokalplusApp.directive('emailAvailable', ['$http', function($http) {
	  return {
	    require : 'ngModel',
	    link : function(scope, element, attrs, ngModel) {
	      ngModel.$asyncValidators.emailAvailable = function(email) {
	        return $http.post(baseURL+'member/checkExistEmail', {email:email}).
		  success(function(data, status, headers, config) {
		    // this callback will be called asynchronously
		    // when the response is available
		    if(data.status == 'success'){
		    ngModel.$setValidity("unique", true);
		    } else {
		    ngModel.$setValidity("unique", false);
		    }
		    
		  }).
		  error(function(data, status, headers, config) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    alert('There was a network error. Try again later.');
		  });
	      };
	    }
	  }
	}])
	// Username Exist
	vokalplusApp.directive('usernameAvailable', ['$http', function($http) {
	  return {
	    require : 'ngModel',
	    link : function(scope, element, attrs, ngModel) {
	      ngModel.$asyncValidators.usernameAvailable = function(username) {
	        return $http.post(baseURL+'member/checkExistUsername', {username:username}).
		  success(function(data, status, headers, config) {
		    // this callback will be called asynchronously
		    // when the response is available
		    if(data.status == 'success'){
		    ngModel.$setValidity("unique", true);
		    } else {
		    ngModel.$setValidity("unique", false);
		    }
		    
		  }).
		  error(function(data, status, headers, config) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		    alert('There was a network error. Try again later.');
		  });
	      };
	    }
	  }
	}])
	// Password Match
	 vokalplusApp.directive('passwordMatch', [function () {
	    return {
	        restrict: 'A',
	        scope:true,
	        require: 'ngModel',
	        link: function (scope, elem , attrs,control) {
	            var checker = function () {
	 
	                //get the value of the first password
	                var e1 = scope.$eval(attrs.ngModel); 
	 
	                //get the value of the other password  
	                var e2 = scope.$eval(attrs.passwordMatch);
	                return e1 == e2;
	            };
	            scope.$watch(checker, function (n) {
	 
	                //set the form control to valid if both 
	                //passwords are the same, else invalid
	                control.$setValidity("unique", n);
	            });
	        }
	    };
	}]);

	// Check Terms and Condition
	vokalplusApp.directive('checkRequired', function(){
	  return {
	    require: 'ngModel',
	    restrict: 'A',
	    link: function (scope, element, attrs, ngModel) {
	      ngModel.$validators.checkRequired = function (modelValue, viewValue) {
	        var value = modelValue || viewValue;
	        var match = scope.$eval(attrs.ngTrueValue) || true;
	        return value && match === value;
	      };
	    }
	  }; 
	});
		