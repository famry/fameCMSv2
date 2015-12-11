	vokalplusApp.factory('profile', function($http){
 		return {
 			getDataProfile: function(id) {
		         return $http.get(baseURL+'getdata/getDataProfile' +'?id='+id);
		    }
		  };
 	});
 	vokalplusApp.controller('MessageCtrl', function($scope,$http) {
 		$scope.$on('message:reply', function(event, data) {
                $scope.messagelists.push(data);
                 //$scope.messagelists.unshift(data);
                $scope.msgto="";
            });
 		$scope.sendNewMsg = false;
 		$scope.selectedID = '0';
 		$scope.MsgCss= {display:'none'};
 		
 		
 		$scope.composeNewMsg = function(){
 			$scope.sendNewMsg = true;
 			$scope.selectedID = '-1';
 			$scope.MsgToCss= {display:'block'};
 			$scope.MsgCss= {display:'block'};
 		};
 		$scope.sendMsgTo = function(index,id){
 			$scope.sendNewMsg = false;
 			$scope.selectedID = index;
 			$scope.SelectedSender = id;
 			$scope.MsgToCss= {display:'none'};
 			$scope.MsgCss= {display:'none'};
 			$http.get(baseURL+'getdata/messagelist?id_sender='+id)
		    .success(function(data) {
		    	$scope.messagelists = data;
		    });
 		};

 		$scope.NewSendMsg= function(form) {
 			if(form.$valid) {
			var reply_to = newMsgForm.elements["sendTo"].value;
			var reply_msg = newMsgForm.elements["sendMsg"].value;
			//alert('reply_to : '+reply_to+' & Message : '+reply_msg);
			$scope.url = baseURL+'new_post/add_message';
  			 var datapost = $('#conversation-reply-form').serialize();
  			$http({
                method: 'POST',
                url: $scope.url,
                data: datapost,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data, status) {
				if(data.status == 'success'){
					alert(data.message);
				 	$scope.newMsgForm.$setPristine();
          			$scope.newmsgperson = '';
          			$scope.newmsgto = '';
          			$scope.sendNewMsg = false;
 					$scope.selectedID = '0';
 					$scope.MsgToCss= {display:'none'};
 					$scope.MsgCss= {display:'none'};
					$('#messages').foundation('reveal', 'close');
				}
            }).error(function(data, status) {
               alert("Error !! Please try again later!!");
            });
			}
            return false;
 		};

 		$scope.ReplyForm = function(form) {
 			if(form.$valid) {
			   // Code here if valid
			var reply_to = toMsgForm.elements["sendTo"].value;
			var reply_msg = toMsgForm.elements["sendMsg"].value;
			var datenow = new Date();
			var yearnow = datenow.getFullYear();
			var monthnow = datenow.getMonth()+1;
			var daynow = datenow.getDate();
			var hournow = datenow.getHours();
			var minnow = datenow.getMinutes();
			var secnow = datenow.getSeconds();
			var fulldate=  yearnow+"-"+monthnow+'-'+daynow+' '+hournow+':'+minnow+':'+secnow;
    		$scope.url = baseURL+'new_post/add_message';
  			 var datapost = $('#conversation-reply').serialize();
  			$http({
                method: 'POST',
                url: $scope.url,
                data: datapost,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(data, status) {
				if(data.status == 'success'){
					alert(data.message);
					// Start Without Socket.io
					$http.get(baseURL+'getdata/messagelist?id_sender='+$scope.SelectedSender)
					    .success(function(data) {
					    	$scope.messagelists = data;
					 });
					// END Without Socket.io
					/*$scope.$emit('message:reply',
 					{	
						'display_name': $scope.cache_displayname,
 						'picture': $scope.cache_picture, 
						'username': $scope.cache_username,
 						'msg_content': reply_msg,
 						'date':  fulldate,
					});*/
				 	//scope.refreshcomment = true;
				 	$scope.toMsgForm.$setPristine();
          			$scope.msgto = '';
					//window.location.href = baseURL+$scope.cache_username;
					//$('#post-new-image').foundation('reveal', 'close');
				}
            }).error(function(data, status) {
               alert("Error !! Please try again later!!");
            });
			}
            return false;
 		};

 		
 	});
	vokalplusApp.controller('memberController', function($scope,$http,$timeout,$modal,socket,profile) {
			$scope.$on('profile:update', function(event, data) {
				//var jsondata = JSON.parse(data);
                $scope.thismember = data;
                //console.log($scope.thismember.picture);
            });
            $scope.$on('fav_artist:update', function(event, data) {
                 var artist_list = data.fav_artist.artist_name;
                 var fullartist = artist_list.join(",");
                 $scope.thismember.fav_artist = fullartist;
            });
			angular.element(document).ready(function () {
 			var this_id = $scope.id_member;
 			var getpromise = 
			           profile.getDataProfile(this_id);
			       getpromise.then(
			          function(payload) { 
			              $scope.thismember = payload.data[0];
			          },
			          function(errorPayload) {
			          	  console.log('failure loading data member');
			          });
			});
			$scope.ModalProfile = function(id) {
				
			       var promise = 
			           profile.getDataProfile(id);
			       promise.then(
			          function(payload) { 
			              $scope.mydata = payload.data[0];
			 			  $('#edit-profile').foundation('reveal', 'open');
			          },
			          function(errorPayload) {
			          	  console.log('failure loading data profile');
			              //$log.error('failure loading movie', errorPayload);
			          });
			   }; 
			$scope.modal_login= function () {
					  var modalInstance = $modal.open({
					      templateUrl: 'login-modal.html',
					      windowClass: 'account-popup reveal-modal',
	      				  controller: 'LoginController',
					    });
				};
	    	$scope.modal_testimonial= function () {
				       	//$scope.id_tomember = idmember;
					    var modalInstance = $modal.open({
					      templateUrl: 'add_testimonial.html',
					      windowClass: 'post content-testimonial reveal-modal',
	      				  controller: 'addTestiController',
					      resolve: {
						        to_member: function () {
						          return $scope.id_member;
						        },
						        to_displayname: function () {
						          return $scope.thisname;
						        },
						        to_username: function () {
						          return $scope.thisusername;
						        }
						      }
					    });

					  };
			

	       	$scope.edit_favartist= function (id) {
	       		  var promise = $http.get(baseURL+'getdata/getDataFavArtist?id='+id);
			       promise.then(
			          function(payload) { 
			              $scope.data_favartist = payload.data;
			              $('#fav-artist-edit').foundation('reveal', 'open'); 
			          },
			          function(errorPayload) {
			          	  console.log('failure loading data profile');
			              //$log.error('failure loading movie', errorPayload);
			          });  
					};
			$scope.TestiAll = function (type) {
				 $scope.$broadcast('testi:box', { type: type });
			  };

			
		    //any code in here will automatically have an apply run afterwards
			
		    /* socket.on('profile:update', function (data) {
		     	console.log(data.name+" "+data.msg);

		          //$(".profile-name").text(data.bio);
		          //$(".profile-name").text(data.location);
		        })*/
			    // Set a variable on the scope to reference the "person" instance
			    // from the HTML template.
			    //$scope.personInstance = profile;
		     });
	vokalplusApp.controller('notifCtrl', function($scope,$http,notification) {
		angular.element(document).ready(function () {
 			var m_id = $scope.cache_id;
		       var promise = 
		           notification.getNotification(m_id,10);
		       promise.then(
		          function(payload) { 
		              $scope.allNotif = payload.data;
		          },
		          function(errorPayload) {
		          	  console.log('failure loading notification');
		              //$log.error('failure loading movie', errorPayload);
		          });
		});
 	});
 	vokalplusApp.controller('ProfileController', function($scope,$http,socket) {

 				$scope.url = baseURL+'member/update_profile';
 		 		$scope.submitForm = function() {
         				var member_pic = editProfileForm.elements["base64profpic"].value;
				    	var member_name = editProfileForm.elements["member_name"].value;
				    	var member_bio = editProfileForm.elements["member_bio"].value;
				    	var member_location = editProfileForm.elements["member_location"].value;
				    	var acc_type = editProfileForm.elements["singer_type"].value;
				    	var genre = editProfileForm.elements["genre"].value;
				    	var socmed_1 = editProfileForm.elements["socmed_1"].value;
				    	var socmed_2 = editProfileForm.elements["socmed_2"].value;
				    	var socmed_3 = editProfileForm.elements["socmed_3"].value;
				    	var socmed_4 = editProfileForm.elements["socmed_4"].value;
				    	var socmed_5 = editProfileForm.elements["socmed_5"].value;
				    	var socmed_6 = editProfileForm.elements["socmed_6"].value;
				    	var socmed_7 = editProfileForm.elements["socmed_7"].value;
				    	
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
									var img_now = $('#thumbDP').attr('src');
									var el = document.getElementById('dd-genre');
									var text = el.options[el.selectedIndex].innerHTML;


									$scope.$emit('profile:update', {
									'picture':img_now,
						    		'display_name':member_name,
						    		'about_me':member_bio,
						    		'location':member_location,
						    		'acc_type':acc_type,
						    		'genre_name':text,
						    		'socmed_1':socmed_1,
						    		'socmed_2':socmed_2,
						    		'socmed_3':socmed_3,
						    		'socmed_4':socmed_4,
						    		'socmed_5':socmed_5,
						    		'socmed_6':socmed_6,
						    		'socmed_7':socmed_7
						    	});
									/*socket.emit('channel:profile', 
										{
											'name': member_name, 
											'msg': 'has been update his/her profile',
											'pic': 'member_pic',
										});*/
									alert(data.message);
									//window.location.href = baseURL+$scope.username;
									$('#edit-profile').foundation('reveal', 'close');
								}
				            }).error(function(data, status) {
				               alert("Error !! Please try again later!!");
				            });
				            return false;
				        };
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
						$('#thumbDP').attr('src',$scope.myCroppedImage);
				    	$('#base64profpic').attr('value',$scope.myCroppedImage);
						//$scope.picture = new_name;
			      		
			      		$('#changeDPModal').foundation('reveal', 'close');
						$('#edit-profile').foundation('reveal', 'open');
					    };
						

			    });
			vokalplusApp.controller('favArtistController', function($scope,$element,$http) {
					 $scope.numArtists = [1,2,3,4,5,6,7,8,9,10];
					 	
				        $scope.mySplit = function(string,nb) {
				        	if(string){
						    $scope.array = string.split('<br />');
						    return $scope.result = $scope.array[nb];
							}
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
					            	var o = {};
									   var a = $('#form_favartist').serializeArray();
									   $.each(a, function() {
									       if (o['artist_name']) {
									       	if (this.name == 'artistname[]' && this.value != ""){
									           if (!o['artist_name'].push) {
									               o['artist_name'] = [o['artist_name']];
									           }
									           o['artist_name'].push(this.value || '');
									       }
									       } else {
									           o['artist_name'] = this.value || '';
									       }
									   });
					                 	alert(data.message);
										$('#fav-artist-edit').foundation('reveal', 'close');
										$scope.searchStr = '';
									    $scope.$emit('fav_artist:update', {
											'fav_artist':o,
								    	});

					               
					                //window.location.href = baseURL+$scope.username;
					            }).error(function(data, status) {
					               alert("Error !! Please try again later!!");
					            });
					            return false;
					        };
				    });
				
			vokalplusApp.controller('ManageTestiController', function($scope,$http,$timeout) {
		        // function to submit the form after all validation has occurred 
		        //$scope.postEntry = [];
		        $scope.checkthis = [];
		       $scope.set_testi = function(id) {
		       	if($scope.checkthis[id]){
		       		var stat1 = 'approved';
		       		var msg = "Testimonial has been approved!!";
		       	}
		       	else {
		       		var stat1 = 'pending';
		       		var msg = "Testimonial has been unapproved!!";
		       	}
		       	$http({
					 method: 'POST',
					 url: baseURL+'member/check_testi',
					headers: {'Content-Type': 'application/json'},
					 data: JSON.stringify({
					 	testi_id: id,
					 	status: stat1
					 })
					 }).success(function (data , status, headers, cfg) {
					 if(data.status == 'success'){
					 	 alert(msg);
					 }else{
					 alert(data.message);
					 }
					 });
							};
			   $scope.highlighted_testi = function(id) {
			   	var stat1 = '1';
			   	var msg = "Testimonial has been highlighted!!";
		       	$http({
					 method: 'POST',
					 url: baseURL+'member/highlighted_testi',
					headers: {'Content-Type': 'application/json'},
					 data: JSON.stringify({
					 	testi_id: id,
					 	highlighted: stat1
					 })
					 }).success(function (data , status, headers, cfg) {
					 if(data.status == 'success'){
					 	 alert(msg);
					 }else{
					 alert(data.message);
					 }
					 });
							};

		    });
    
		    		vokalplusApp.controller('managePhoto', function($scope,$http,$modal) {
		    			

		    			 $scope.add_image = function() {
				     	 	$('#post-new-image').foundation('reveal', 'open');
					        

							};
				     	 $scope.edit_image = function(id_img) {
				     	 	$http.get(baseURL+'getdata/getDataImage?id='+id_img)
						    .success(function(data) {
						    	$scope.dataImg = data[0];
						    	$('#post-edit-image').foundation('reveal', 'open');
				    		})

					        
					    	
				             // $('#editimageid').attr('value',id_img);

							};
				     	
					    // Set a variable on the scope to reference the "person" instance
					    // from the HTML template.
					    //$scope.personInstance = profile;
				     });	

					vokalplusApp.controller('pictureCtrl', function($scope,$http) {
						$('.crop-image-edit').cropit({
				          imageBackground: true,
				          imageBackgroundBorderWidth: 15,
				          smallImage : 'stretch'
				        });
						$scope.submitForm = function() {
						var imageDataEdit = $('.crop-image-edit').cropit('export',{
										  type: 'image/jpeg',
										  quality: .9,
										  originalSize: true
										});
						$scope.base64img =imageDataEdit;
						$('#thumbEditImg').attr('src',$scope.base64img);
				    	$('#urlImgEdit').attr('value',$scope.base64img);
			      		
			      		$('#changePicModal').foundation('reveal', 'close');
						$('#post-edit-image').foundation('reveal', 'open');
					    };
			    	
					})
					vokalplusApp.controller('addImageController', function($scope,$http) {

						$(document).on('closed.fndtn.reveal', '#post-new-image[data-reveal]', function () {
						  $scope.addImageForm.$setPristine();
						  $scope.img_title = "";
						  $scope.img_desc = "";
						});


						
				        // function to submit the form after all validation has occurred            
				          $scope.submitForm = function() {
						  			$scope.submitted = true;
						  			var imageData = $('.image-editor').cropit('export',{
										  type: 'image/jpeg',
										  quality: .9,
										  originalSize: true
										});
						  			$scope.cropImg = imageData;
						    		$scope.url = baseURL+'new_post/add_image';
				    				$('#urlImgNew').attr('value',$scope.cropImg);
						  			 var datapost = $('#addImageForm').serialize();
						  			$http({
						                method: 'POST',
						                url: $scope.url,
						                data: datapost,
						                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
						            }).success(function(data, status) {
										if(data.status == 'success'){
											alert(data.message);
											window.location.href = baseURL+$scope.cache_username;
											//$('#post-new-image').foundation('reveal', 'close');
										}
						            }).error(function(data, status) {
						               alert("Error !! Please try again later!!");
						            });
						            return false;
						        };

				    });
					vokalplusApp.controller('editImageController', function($scope,$http,$window) {
							$scope.deleteImage = function(id) {
								var confirm = $window.confirm("Are you sure want to delete this image??");
								if (confirm){
									var datastring = 'img_id='+ id ;
									$scope.url = baseURL+'new_post/delete_image';
									$http({
							                method: 'POST',
							                url: $scope.url,
							                data: datastring,
							                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
							            }).success(function(data, status) {
											if(data.status == 'success'){
												alert(data.message);
												window.location.href = baseURL+$scope.cache_username;
												//$('#post-new-image').foundation('reveal', 'close');
											}
							            }).error(function(data, status) {
							               alert("Error !! Please try again later!!");
							            });
							            return false;
								} else {
									return false;								}
							};
					        // function to submit the form after all validation has occurred            
					          $scope.submitForm = function() {
							  			$scope.submitted = true;
							    		$scope.url = baseURL+'new_post/edit_image';
							  			 var datapost = $('#editImageForm').serialize();
							  			$http({
							                method: 'POST',
							                url: $scope.url,
							                data: datapost,
							                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
							            }).success(function(data, status) {
											if(data.status == 'success'){
												alert(data.message);
												window.location.href = baseURL+$scope.cache_username;
												//$('#post-new-image').foundation('reveal', 'close');
											}
							            }).error(function(data, status) {
							               alert("Error !! Please try again later!!");
							            });
							            return false;
							        };

					    });