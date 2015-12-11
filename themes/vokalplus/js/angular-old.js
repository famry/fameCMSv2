// app.js
    // create angular app
    var baseURL = "http://localhost/php/vp/";

    //var base64uploadApp = angular.module('vokalplusApp',['naif.base64']);
    var vokalplusApp = angular.module('vokalplusApp',["angucomplete-alt","ngImgCrop","naif.base64","mm.foundation"]);
    vokalplusApp.controller('ctrl', function($scope, $http, $window, $rootScope){
      $scope.loadEndHandler = function (e, reader, file, rawFiles, fileObjects, fileObj) {
        // console.log(e);
        // console.log(reader);
        // console.log(file);
        // console.log(rawFiles);
        // console.log(fileObjects);
        // console.log(fileObj);
      };
      $scope.onChange = function (e, fileList) {
        // console.log(e);
        // console.log(fileList);
      };
      var uploadedCount = 0;
    });

    vokalplusApp.value("profile", {
	    firstName: "Famry",
	    lastName: "Fam",

	    getFullName: function ()
	    {
	      return this.firstName + " " + this.lastName;
	    }
	  });
     
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
		vokalplusApp.directive('getImgSoundcloud', function($http){
	  return {
	    scope: {
	      scUrl: '@scUrl'
	    },
	    link: function(scope, element, attrs) {
	     //$http.get('api/datacategorydetailtranslations' + '/' + scope.categoryID + '/' + scope.categoryDetailID + '/' + scope.languageID)
	      $http.get('http://api.soundcloud.com/resolve.json?url='+scope.scUrl+'&client_id=a4ee388c3177dd25b5727d49a08054d4')
	      .success(function (data) {
	      	var avatar_url = data.user.avatar_url;
	      	var artwork_url = data.artwork_url;
	      	
	      	scope.avatar_url = avatar_url.replace("large", "original");
	      	if (artwork_url != null){
	      	scope.artwork_url = artwork_url.replace("large", "original");;
	      	} else {
	      	scope.artwork_url = null;	
	      	}
	      });
	    },
	    template: '<div class="thumb-sc" ng-show="artwork_url ==null"><img src="{{avatar_url}}" alt="" class="thumbnail" onerror="imgError(this);"></div><div class="thumb-sc" ng-show="artwork_url !=null"><img src="{{artwork_url}}" alt="" class="thumbnail" onerror="imgError(this);"></div>'
	  }
	});
		
    // ============================		Profile Controller 		============================ //


    vokalplusApp.controller('PostController', function($scope,$http,$timeout,$modal) {
	        // function to submit the form after all validation has occurred 
	        //$scope.postEntry = [];
		       $scope.view_post= function (idpost) {
		       	$scope.id_posting = idpost;
				    var modalInstance = $modal.open({
				      templateUrl: 'post_content.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'ModalViewPost',
				      resolve: {
					        id_post: function () {
					          return $scope.id_posting;
					        }
					      }
				    });

				  };

		        if ($scope.id_member == undefined){
		        var id = 0;
		        } else {
		        var id = $scope.id_member;	
		        }
		         $scope.curPage = 0;
 				 $scope.pageSize = 9;
			     $scope.postEntry = [];
			     $scope.fil2 = 0;
			     $scope.fil3 = 0;
			     $scope.fil4 = 0;
			    $("#activeTypePostNav").text('All Post');
			    $("#activeOrderByNav").text('Newest');
			     $("#activeGenreNav").text('All Genre');

			 $scope.ChosenType = function (type) {
			    $("#activeTypePostNav").text(type);
			  };
			 $scope.ChosenOrder = function (type) {
			    $("#activeOrderByNav").text(type);
			  };
			  $scope.ChosenGenre = function (type) {
			    $("#activeGenreNav").text(type);
			  };

	        $scope.isLast = function(check) {
			    var cssClass = check ? 'end' : null;
			    return cssClass;
			};

			$scope.numberOfPages = function() 
				 {
				 return Math.ceil($scope.filtered.length / $scope.pageSize);
				 };
			
		    $http.get(baseURL+'member/getAllPost/'+id)
		    .success(function(post) {
		    	  $timeout(function(){
		    	$scope.postEntry = post;
		    	});
		    	//console.log($scope.postEntry.id_post);
	  			})
    		});

		vokalplusApp.controller('ModalViewPost', function ($scope,$sce,$modalInstance,$http,id_post) {
			  $scope.idpost = id_post;
			  $scope.postDetails = [];
			  $http.get(baseURL+'member/getPost/'+id_post)
			    .success(function(data) {
			    	$scope.title_post = data[0].title;
			    	$scope.type_post = data[0].type_post;
			    	$scope.display_name = data[0].display_name;
			    	$scope.post_view = data[0].post_view;
			    	$scope.image_post = data[0].feat_img_url;
			    	$scope.youtube_url = $sce.trustAsResourceUrl('http://www.youtube.com/embed/'+data[0].content_url);
			    	$scope.sc_url = $sce.trustAsResourceUrl('https://w.soundcloud.com/player/?url='+data[0].content_url+'&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true');
			    	$scope.htmlcontent = $sce.trustAsHtml(data[0].content);
		  			})
			  $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			  };
			});
	    vokalplusApp.filter('pagination', function()
		{
		 return function(input, start) {
	        start = +start; //parse to int
	        return input.slice(start);
	    }
		});	
   

    vokalplusApp.controller('ManageTestiController', function($scope,$http,$timeout) {
		        // function to submit the form after all validation has occurred 
		        //$scope.postEntry = [];
		       
			    $http.get(baseURL+'member/getAllTesti')
			    .success(function(testi) {
			    	 $timeout(function(){
			    	$scope.testiList = testi;
			    	 });
	    		})

		    });
    vokalplusApp.controller('memberController', function($scope,profile,socket) {
    	
    //any code in here will automatically have an apply run afterwards
	
     socket.on('refresh profile', function (data) {
     	if (data.pic !=""){
	     	$scope.picture=data.pic;
	     }
          $scope.display_name=data.name;
          $scope.about_me=data.bio;
          $scope.location=data.location;
          $scope.socmed_1=data.socmed_1;
          $scope.socmed_2=data.socmed_2;
          $scope.socmed_3=data.socmed_3;
          $scope.socmed_4=data.socmed_4;
          $scope.socmed_5=data.socmed_5;
          $scope.socmed_6=data.socmed_6;
          $scope.socmed_7=data.socmed_7;

          //$(".profile-name").text(data.bio);
          //$(".profile-name").text(data.location);
        })
	    // Set a variable on the scope to reference the "person" instance
	    // from the HTML template.
	    //$scope.personInstance = profile;
     });
    
    vokalplusApp.controller('editDisplayPicture', function($scope){
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
	    	$scope.submitted = true;
	    	$('#thumbDP').attr('src',$scope.myCroppedImage);
	    	$('#base64profpic').attr('value',$scope.myCroppedImage);
			$('#changeDPModal').foundation('reveal', 'close');
			$('#edit-profile').foundation('reveal', 'open');
	    }
    });

    vokalplusApp.controller('ProfileController', function($scope,$http,socket) {

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
        
		$scope.url = baseURL+'member/update_profile';
		/*$scope.$watch('display_name', function() {
	       alert('hey, myVar has changed!');
	   });*/
		
        // function to submit the form after all validation has occurred            
         $scope.submitForm = function() {
			            //var elem = angular.element($element);
			            var datapost = $('#form_profile').serialize();
			            //var dt = $(elem.parent()).serialize();
			            $http({
			                method: 'POST',
			                url: $scope.url,
			                data: datapost,
			                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			            }).success(function(data, status) {
							if(data.status == 'success'){
								socket.emit('profile updated', 
									{
										'pic': $scope.member_pic,
										'name': $scope.member_name,
										'bio': $scope.member_bio,
										'location': $scope.member_location,
										'socmed_1': $scope.socmed_1,
										'socmed_2': $scope.socmed_2,
										'socmed_3': $scope.socmed_3,
										'socmed_4': $scope.socmed_4,
										'socmed_5': $scope.socmed_5,
										'socmed_6': $scope.socmed_6,
										'socmed_7': $scope.socmed_7
									});
								alert(data.message);
								window.location.href = baseURL+$scope.username;
								//$('#edit-profile').foundation('reveal', 'close');
							}
			            }).error(function(data, status) {
			               alert("Error !! Please try again later!!");
			            });
			            return false;
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
							//$('#fav-artist-edit').foundation('reveal', 'close');
			                alert(data.message);
			                window.location.href = baseURL+$scope.username;
			            }).error(function(data, status) {
			               alert("Error !! Please try again later!!");
			            });
			            return false;
			        };
		    });
	// ============================		END Profile Controller 		============================ //
		vokalplusApp.controller('addTestiController', function($scope,$http) {

        // function to submit the form after all validation has occurred            
       				
			        $scope.submitForm = function() {
			  			$scope.submitted = true;
			            console.log("posting new add_testimonial....");
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
							//$('#submit-testimonial').foundation('reveal', 'close');
			                alert(data.message);
			                window.location.href = baseURL+$scope.username;
						 }else{
						  $scope.message = data.message;
						 }
						 })
						 .error(function(data, status, headers, cfg) {
						 	alert("Error !! Please try again later!!");
					    });

			        };

    });
	
		vokalplusApp.controller('managePhoto', function($scope,profile) {
     	 $scope.editImage = function(id_img) {
     	 	$('#post-edit-image').foundation('reveal', 'open');
	        	//alert(id_img);
	        
	    	
              $('#editimageid').attr('value',id_img);

			};
     	
	    // Set a variable on the scope to reference the "person" instance
	    // from the HTML template.
	    //$scope.personInstance = profile;
     });
		vokalplusApp.controller('addImageController', function($scope,$http) {
			$scope.newImage='';
	        $scope.newCroppedImage='';

	        var handleFileSelect=function(evt) {
	          var file=evt.currentTarget.files[0];
	          var reader = new FileReader();
	          reader.onload = function (evt) {
	            $scope.$apply(function($scope){
	              $scope.newImage=evt.target.result;
	            });
	          };
	          reader.readAsDataURL(file);
	        };
	        angular.element(document.querySelector('#file-newimg')).on('change',handleFileSelect);
			
	        // function to submit the form after all validation has occurred            
	          $scope.submitForm = function() {
			  			$scope.submitted = true;
			    		$scope.url = baseURL+'new_post/add_image';
	    				//$('#base64newimage').attr('value',$scope.newCroppedImage);
			  			 var datapost = $('#addImageForm').serialize();
			  			$http({
			                method: 'POST',
			                url: $scope.url,
			                data: datapost,
			                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			            }).success(function(data, status) {
							if(data.status == 'success'){
								alert(data.message);
								window.location.href = baseURL+$scope.username;
								//$('#post-new-image').foundation('reveal', 'close');
							}
			            }).error(function(data, status) {
			               alert("Error !! Please try again later!!");
			            });
			            return false;
			        };

	    });
	vokalplusApp.controller('editImageController', function($scope,$http) {
			var idphoto = document.getElementById('editimageid').value;

        	//var idphoto= editImageForm.elements["id_img"].value;
			//$scope.idimg = idphoto;
			$scope.idimg = '';
			$scope.myghj="2";
			$scope.editImage='';
	        $scope.editCroppedImage='';
	        
	        /*$scope.$apply(function($scope){
              //$('#editimageid').attr('value',id_img);
              $scope.idimg = '256';
              alert('ya');
            });*/
			/*$scope.$watch('idphoto', function() {
			       alert('hey, myVar has changed!');
			   })*/

	        var handleFileSelect=function(evt) {
	          var file=evt.currentTarget.files[0];
	          var reader = new FileReader();
	          reader.onload = function (evt) {
	            $scope.$apply(function($scope){
	              $scope.editImage=evt.target.result;
	            });
	          };
	          reader.readAsDataURL(file);
	        };
	        angular.element(document.querySelector('#file-editimg')).on('change',handleFileSelect);
			
	        // function to submit the form after all validation has occurred            
	         /* $scope.submitForm = function() {
			  			$scope.submitted = true;
			    		$scope.url = baseURL+'new_post/edit_image';
	    				//$('#base64newimage').attr('value',$scope.newCroppedImage);
			  			 var datapost = $('#editImageForm').serialize();
			  			$http({
			                method: 'POST',
			                url: $scope.url,
			                data: datapost,
			                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
			            }).success(function(data, status) {
							if(data.status == 'success'){
								alert(data.message);
								window.location.href = baseURL+$scope.username;
								//$('#post-new-image').foundation('reveal', 'close');
							}
			            }).error(function(data, status) {
			               alert("Error !! Please try again later!!");
			            });
			            return false;
			        };*/

	    });
	// Posting Controller
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
	