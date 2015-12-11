// app.js
    // create angular app
    var baseURL = "http://localhost/php/vp/";
    var vokalplusApp = angular.module('vokalplusApp',["angucomplete-alt"]);

    // create angular controller
    vokalplusApp.controller('LoginController', function($scope,$http) {
    	$scope.email = undefined;
		$scope.password = undefined;
		$scope.message = undefined;
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting data login....");
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'member/login',
			 headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({email: $scope.email,password:$scope.password})
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

	 // create angular controller
    vokalplusApp.controller('RegisterController', function($scope,$http) {
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting data registration....");
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'member/register',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({email: $scope.email,password:$scope.password})
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 $('#account-register-email').foundation('reveal', 'close');
			 	 document.getElementById('get-email').value=$scope.email;
			 	 $('#account-register-validate').foundation('reveal', 'open');
				 document.getElementById("form_register").reset();
			 }else{
			  $scope.message = data.message;
			 }
			 });
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

	// ============================		Profile Controller 		============================ //


		vokalplusApp.controller('PostController', function($scope,$http) {
		        // function to submit the form after all validation has occurred 
		        //$scope.postEntry = [];
			    $http.get(baseURL+'member/getAllPost')
			    .success(function(post) {
			    	$scope.postEntry = post;
	    		})

		    });

		vokalplusApp.controller('ManageTestiController', function($scope,$http) {
		        // function to submit the form after all validation has occurred 
		        //$scope.postEntry = [];
		         
			    $http.get(baseURL+'member/getAllTesti')
			    .success(function(testi) {
			    	$scope.testiList = testi;
	    		})

		    });

		 vokalplusApp.controller('ProfileController', function($scope,$http) {
    		
        	$scope.member_pic = editProfileForm.elements["base64profpic"].value;
        	$scope.member_name = editProfileForm.elements["member_name"].value;
        	$scope.member_bio = editProfileForm.elements["member_bio"].value;
        	$scope.member_location = editProfileForm.elements["member_location"].value;
        	$scope.socmed_1 = editProfileForm.elements["socmed_1"].value;
        	$scope.socmed_2 = editProfileForm.elements["socmed_2"].value;
        	$scope.socmed_3 = editProfileForm.elements["socmed_3"].value;
        	$scope.socmed_4 = editProfileForm.elements["socmed_4"].value;
        	$scope.socmed_5 = editProfileForm.elements["socmed_5"].value;
        	$scope.socmed_6 = editProfileForm.elements["socmed_6"].value;
        	$scope.socmed_7 = editProfileForm.elements["socmed_7"].value;
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("Updating data profile....");
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'member/update_profile',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	pic: $scope.member_pic,
			 	name: $scope.member_name,
			 	bio: $scope.member_bio,
			 	location: $scope.member_location,
			 	socmed_1: $scope.socmed_1,
			 	socmed_2: $scope.socmed_2,
			 	socmed_3: $scope.socmed_3,
			 	socmed_4: $scope.socmed_4,
			 	socmed_5: $scope.socmed_5,
			 	socmed_6: $scope.socmed_6,
			 	socmed_7: $scope.socmed_7
			 })	
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 alert(data.message);
			$('#edit-profile').foundation('reveal', 'close');
			 }
			 });
        };

    });

		vokalplusApp.controller('favArtistController', function($scope,$element,$http) {
		        $scope.numArtists = [1,2,3,4,5,6,7,8,9,10];
		        $scope.mySplit = function(string, nb) {
				    $scope.array = string.split('<br />');
				    return $scope.result = $scope.array[nb];
				}
				
			        $scope.url = baseURL+'member/update_favartist';
			        $scope.submitForm = function() {
			            //var elem = angular.element($element);
			            var datapost = $('#form_favartist').serialize();
			            //var dt = $(elem.parent()).serialize();
			            $http({
			                method: 'POST',
			                url: $scope.url,
			                data: datapost,
			                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			            }).success(function(data, status) {
							$('#fav-artist-edit').foundation('reveal', 'close');
			                alert(data.message);
			            }).error(function(data, status) {
			               alert("Error !! Please try again later!!");
			            });
			            return false;
			        };
		    });
	// ============================		END Profile Controller 		============================ //


	// ============================		Post Controller 		============================ //
	 	// create angular controller

    	vokalplusApp.controller('addTestiController', function($scope,$http) {

        // function to submit the form after all validation has occurred            
       				
			        $scope.submitForm = function() {
			  			$scope.submitted = true;
			            console.log("posting new music post....");
			    		$scope.url = baseURL+'member/add_testimonial';
        				$scope.id_receiver = document.getElementById('receivertesti').value;
			        	var text= AddTestiForm.elements["testi_txt"].value;
			    		$http({
						 method: 'POST',
						 url: $scope.url,
						 headers: {'Content-Type': 'application/json'},
						 data: JSON.stringify({
						 	id:$scope.id_receiver,
						 	text:text
						 })
						 }).success(function (data, status, headers, cfg) {
						 if(data.status == 'success'){
							$('#submit-testimonial').foundation('reveal', 'close');
			                alert(data.message);
						 }else{
						  $scope.message = data.message;
						 }
						 })
						 .error(function(data, status, headers, cfg) {
						 	alert("Error !! Please try again later!!");
					    });

			        };

    });
	 	// create angular controller
    vokalplusApp.controller('MusicPostController', function($scope,$http) {
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting new music post....");
        	var desc= newMusicForm.elements["song_desc"].value;
        	var genre= newMusicForm.elements["song_genre"].selectedIndex;
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_music',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.song_title,
			 	url:$scope.song_url,
			 	desc:desc,
			 	genre:genre
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your music post has been successfully posted!!');
				 document.getElementById("post-new-music").reset();
			 	 window.location.href = baseURL+'member';
			 }else{
			 alert(data.message);
			 }
			 });
        };

    });

    	// create angular controller
    vokalplusApp.controller('VideoPostController', function($scope,$http) {
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting new video post....");
        	var desc= newVideoForm.elements["video_desc"].value;
        	var genre= newVideoForm.elements["video_genre"].selectedIndex;
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_video',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.video_title,
			 	url:$scope.video_url,
			 	desc:desc,
			 	genre:genre
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your video post has been successfully posted!!');
				 document.getElementById("post-new-video").reset();
			 	 window.location.href = baseURL+'member';
			 }else{
			 alert(data.message);
			 }
			 });
        };

    });

     vokalplusApp.controller('ArticlePostController', function($scope,$http) {
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting new article post....");
        	//var img= newVideoForm.elements["article_img"].value;
        	var desc= newArticleForm.elements["article_content"].value;
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_article',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.article_title,
			 	img: $scope.article_img,
			 	desc:desc
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your article post has been successfully posted!!');
				 document.getElementById("post-new-article").reset();
			 	 window.location.href = baseURL+'member';
			 }else{
			 alert(data.message);
			 }
			 });
        };

    });
     vokalplusApp.controller('EventPostController', function($scope,$http) {
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	console.log("posting new event post....");
        	var desc= newEventForm.elements["event_content"].value;
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_event',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.event_title,
			 	start_date: $scope.start_date,
			 	start_time: $scope.start_time,
			 	end_date: $scope.end_date,
			 	end_time: $scope.end_time,
			 	venue: $scope.venue,
			 	desc:desc
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your event post has been successfully posted!!');
				 document.getElementById("post-new-event").reset();
			 	 window.location.href = baseURL+'member';
			 }else{
			 alert(data.message);
			 }
			 });
        };

    });
	
