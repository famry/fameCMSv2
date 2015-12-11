	

    vokalplusApp.controller('PostController', function($scope,$http,$timeout,$modal) {
	        // function to submit the form after all validation has occurred 
	        //$scope.postEntry = [];
	        angular.element(document).ready(function () {
		       $scope.view_post= function (idpost) {
		       	$scope.id_posting = idpost;
				    var modalInstance = $modal.open({
				      templateUrl: 'post_content.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'ModalViewPost',
				      resolve: {
				      		alldata: function () {
				      			return {
				      			id_member : $scope.cache_id,
				      			username : $scope.cache_username,
				      			display_name : $scope.cache_name,
				      			picture : $scope.cache_picture
				      			}
					        },
					        id_post: function () {
					          return $scope.id_posting;
					        },
					        /*id_member: function () {
					          return $scope.cache_id;
					        },
					        username: function () {
					          return $scope.cache_username;
					        },
					        display_name: function () {
					          return $scope.cache_displayname;
					        },
					        picture: function () {
					          return $scope.cache_picture;
					        },*/
					      }
				    });

				  };

				  $scope.post_editing= function (idpost,type) {
				  	$scope.id_posting = idpost;
				  	$scope.type_posting= type;
				    var modalInstance = $modal.open({
				      templateUrl: 'edit-post.html',
				      windowClass: 'modal-app reveal-modal medium',
      				  controller: 'ModalEditPost',
				      resolve: {
					        id_post: function () {
					          return $scope.id_posting;
					        },
					        type_post: function () {
					          return $scope.type_posting;
					        },
					      }
				    });
				  };
				 });

				// Default //
  				$scope.maxSize = 5;
		        $scope.currentPage = 1;
 				$scope.pageSize = 9;

			    $scope.postEntry = [];
			    $scope.fil1 = 0;
			    $scope.fil2 = 0;
			    $scope.fil3 = 0;
			    $scope.fil4 = 0;
			    $scope.showpost=true;
			    var id = $scope.id_member;
			    $http.get(baseURL+'getdata/getAllPost/'+id)
				    .success(function(post) {
				    	  $timeout(function(){
				    	$scope.postEntry = post;
				    	});
			  			})

			    $("#activeTabNav").text('Interactions');
			    $("#activeTypePostNav").text('All Post');
			    $("#activeOrderByNav").text('Newest');
			    $("#activeGenreNav").text('All Genre');
			    
				$scope.ChosenTab = function (type) {
			    $("#activeTabNav").text(type);
			    if (type == 'interactions'){
			    	$scope.showpost=true;
			    	$scope.showfollow=false;
			    	$scope.showtesti=false;
			    	$scope.fil1=0;
			    	$http.get(baseURL+'getdata/getAllPost/'+id)
				    .success(function(post) {
				    	  $timeout(function(){
				    	$scope.postEntry = post;
				    	});
			  			})
			    } 
			    else if (type == 'follower'){
			    	$scope.showpost=false;
			    	$scope.showfollow=true;
			    	$scope.showtesti=false;
			    	$scope.fil1=1;
			    	$http.get(baseURL+'getdata/getFollowers?id='+id)
				    .success(function() {
				    	 $timeout(function(){
						$scope.followList = [];
				    	$scope.followList = data;
				    	 });
		    		})
			    }
			    else if (type == 'following'){
			    	$scope.showpost=false;
			    	$scope.showfollow=true;
			    	$scope.showtesti=false;
			    	$scope.fil1=2;
			    	$http.get(baseURL+'getdata/getFollowing?id='+id)
				    .success(function(data) {
				    	 $timeout(function(){
				    	$scope.followList = [];
				    	$scope.followList = data;
				    	 });
		    		})
			    }
			    else if (type == 'testimonials'){
			    	$scope.showpost=false;
			    	$scope.showfollow=false;
			    	$scope.showtesti=true;
			    	$scope.fil1=3;
			    	$http.get(baseURL+'getdata/getAllTesti?id='+id)
				    .success(function(testi) {
				    	 $timeout(function(){

			    		$scope.pageSize = 5;
				    	$scope.testiList = testi;
				    	 });
		    		})
			    }
			  };

		       $scope.$on('testi:box', function (event, args) {
				$scope.ChosenTab(args.type);	 
				});  
			     
			    

			  
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
			$scope.isClick = function(check) {
			    var cssClass = check ? 'hide' : null;
			    return cssClass;
			};
			
			$scope.numberOfPages = function(length) 
				 {
				 return Math.ceil(length / $scope.pageSize);
				 };

    		});

		vokalplusApp.controller('HomePostController', function($scope,$http,$timeout,$modal) {
	        // function to submit the form after all validation has occurred 
	        //$scope.postEntry = [];
	        angular.element(document).ready(function () {
		       $scope.view_post= function (idpost) {
		       	$scope.id_posting = idpost;
				    var modalInstance = $modal.open({
				      templateUrl: 'post_content.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'ModalViewPost',
				      resolve: {
				      		alldata: function () {
				      			return {
				      			id_member : $scope.cache_id,
				      			username : $scope.cache_username,
				      			display_name : $scope.cache_name,
				      			picture : $scope.cache_picture
				      			}
					        },
					        id_post: function () {
					          return $scope.id_posting;
					        }
					      }
				    });

				  };
				 });

				// Default //
  				$scope.maxSize = 5;
		        $scope.currentPage = 1;
 				$scope.pageSize = 9;

			    $scope.postEntry = [];
			    $scope.fil1 = 0;
			    $scope.fil2 = 0;
			    $scope.fil3 = 0;
			    $scope.fil4 = 0;
			    $http.get(baseURL+'getdata/getAllPost/0')
				    .success(function(post) {
				    	  $timeout(function(){
				    	$scope.postEntry = post;
				    	});
			  			})

			    $("#activeTabNav").text('Interactions');
			    $("#activeTypePostNav").text('All Post');
			    $("#activeOrderByNav").text('Newest');
			    $("#activeGenreNav").text('All Genre');
			    
				$scope.ChosenTab = function (type) {
			    $("#activeTabNav").text(type);
			    if (type == 'interactions'){
			    	$scope.fil1=0;
			    } 
			   
			  };
			  
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
			$scope.isClick = function(check) {
			    var cssClass = check ? 'hide' : null;
			    return cssClass;
			};
			
			$scope.numberOfPages = function(length) 
				 {
				 return Math.ceil(length / $scope.pageSize);
				 };

    		});
		vokalplusApp.controller('SearchController', function($scope,$http,$timeout,$modal) {
			$scope.view_post= function (idpost) {
		       	$scope.id_posting = idpost;
				    var modalInstance = $modal.open({
				      templateUrl: 'post_content.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'ModalViewPost',
				      resolve: {
				      		alldata: function () {
				      			return {
				      			id_member : $scope.cache_id,
				      			username : $scope.cache_username,
				      			display_name : $scope.cache_name,
				      			picture : $scope.cache_picture
				      			}
					        },
					        id_post: function () {
					          return $scope.id_posting;
					        },
					        /*id_member: function () {
					          return $scope.cache_id;
					        },
					        username: function () {
					          return $scope.cache_username;
					        },
					        display_name: function () {
					          return $scope.cache_displayname;
					        },
					        picture: function () {
					          return $scope.cache_picture;
					        },*/
					      }
				    });

				  };
			$scope.fil1 = 0;
			$scope.maxSize = 5;
		    $scope.currentPage = 1;
 			$scope.pageSize = 9;
			var searchkey = searchkeyForm.elements["searchTxt"].value;
			$http.get(baseURL+'getdata/getAllSearch?q='+searchkey)
		    .success(function(post) {
		    	  $timeout(function(){
		    	$scope.postEntry = post;
		    	});
	  			})

		   $scope.totalFilteredType = function(type) {
			    var count = 0;
			    angular.forEach($scope.postEntry, function(post){
			    	if (post.type_post == type){
				    	if (type == null){
				    	count += post.type_post ? null : 1;
				    	} else {
				        count += post.type_post ? 1 : 0;
				    	}
			    	}
			    });
			    return count; 
			}
		    $scope.numberOfPages = function(length) 
				 {
				 return Math.ceil(length / $scope.pageSize);
				 };
		});

		vokalplusApp.controller('ModalEditPost', function ($scope,$sce,$http,$modalInstance,id_post,type_post) {
			  //$scope.idpost = id_post;
			  //$scope.type_post = type_post;
			   $scope.tinymceOptions = {
			    onChange: function(e) {
			      // put logic here for keypress and cut/paste changes
			    },
			    inline: false,
				menubar: false,
				statusbar: false,
				height: 180,
			    content_css: baseURL+'assets/themes/frontend/vokalplus/stylesheets/wysiwyg.css',
			  	plugins: [
				  "advlist autolink lists link image charmap print preview anchor"
			  	],
				toolbar: "bold italic underline | alignleft aligncenter alignright | link | image",
			    format : 'text',
			    trusted : 'true'
			  };
			  $scope.loading = true;
			  $http.get(baseURL+'getdata/getPost/'+id_post)
					    .success(function(data) {
				    	$scope.loading = false;
				    	$scope.title_post = data[0].title;
				    	$scope.htmlcontent = $sce.trustAsHtml(data[0].content);
			  })
			  $scope.submitForm = function() {
	  			$scope.url = baseURL+'new_post/edit_post';
	  			var title = editPostForm.elements["post_title"].value;
	  			var text = editPostForm.elements["htmlcontent"].value;
	  			$http({
				 method: 'POST',
				 url: $scope.url,
				 headers: {'Content-Type': 'application/json'},
				 data: JSON.stringify({
				 	id:id_post,
				 	title:title,
				 	text:text
				 })
				 }).success(function (data, status, headers, cfg) {
				 	alert("Your post has been edit successfully!!");
					$modalInstance.close();
 					/*scope.$emit('post:update',
 					{	
 						'comment': scope.commentarea,
					});*/
				 })
				 .error(function(data, status, headers, cfg) {
				 	alert("Error !! Please try again later!!");
			    });

		        };
				$scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			  };
			});

		vokalplusApp.controller('ModalViewPost', function ($scope,$sce,$modalInstance,$http,
			alldata,id_post) {
			  $scope.data = alldata;
			  $scope.idpost = id_post;
			  $scope.loading = true;
			  $scope.postDetails = [];
			  $http.post(baseURL+'getdata/addcountpost?id='+id_post)
			    .success(function(data) {
			    	$scope.post_view = data;
		  			})
			  $http.get(baseURL+'getdata/getPost/'+id_post)
			    .success(function(data) {
			    	$scope.loading = false;
			    	$scope.title_post = data[0].title;
			    	$scope.type_post = data[0].type_post;
			    	$scope.display_name = data[0].display_name;
			    	$scope.post_view = data[0].post_view;
			    	$scope.count_applause = data[0].count_applause;
			    	$scope.count_comment = data[0].count_comment;
			    	$scope.image_post = data[0].feat_img_url;
			    	$scope.youtube_url = $sce.trustAsResourceUrl('http://www.youtube.com/embed/'+data[0].content_url);
			    	$scope.sc_url = $sce.trustAsResourceUrl('https://w.soundcloud.com/player/?url='+data[0].content_url+'&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true');
			    	$scope.htmlcontent = $sce.trustAsHtml(data[0].content);
			    	$scope.last_edit = data[0].last_edit;

			    	
					$scope.start_date = moment(data[0].start_date).format('MMMM Do,YYYY');
			        $scope.start_time = data[0].start_time
			       	$scope.end_date = moment(data[0].end_date).format('MMMM Do,YYYY');
				 	$scope.end_time = data[0].end_time
				 	var venue = data[0].venue_address.split(",");
				 	$scope.venue = venue[0];
				 	var address = data[0].venue_address.replace($scope.venue,"");
				 	$scope.address = address.slice(2);
				 	var changemaps= data[0].venue_address.replace(" ","+");
				 	$scope.maps = $sce.trustAsResourceUrl("https://www.google.com/maps/embed/v1/place?key=AIzaSyA25n4dacMtbs63AOe1BJ4G-8sPercz6e8&q="+changemaps);
				 	if ($scope.start_date == $scope.end_date){
				 		$scope.timeevent = $scope.start_date+' at '+$scope.start_time+' - '+$scope.end_time;
				 	} else { 
				 		$scope.timeevent = $scope.start_date+' - '+$scope.end_date+' at '+$scope.start_time+' - '+$scope.end_time;
				 	};
		  			})

			  $scope.cancel = function () {
			    $modalInstance.dismiss('cancel');
			  };
			});
		// Discuss Page
	vokalplusApp.controller('memberDiscussCtrl', function ($scope,$http) {

		angular.element(document).ready(function () {
					var listDiscuss= function() {
		 				$http.get(baseURL+'getdata/discussion/' + $scope.id_artist)
					    .success(function(data) {
					    	$scope.dataDiscusses = data;
					    })
					};
					listDiscuss();
		//var jsondata = JSON.parse($scope.memberData);
		    //$scope.data = jsondata;
		    $scope.dataDiscusses= [];
			$scope.maxSize = 5;
		    $scope.currentPage = 1;
		    $scope.currentPageDiscuss = 1;
 			$scope.pageSize = 9;
 			$scope.pageDiscussSize = 10;
		    $scope.showfollower = false;
		     $scope.isLast = function(check) {
			    var cssClass = check ? 'end' : null;
			    return cssClass;
			};
			 $scope.numberOfPages = function(length,size) 
				 {
				 return Math.ceil(length / size);
				 };
		    $scope.showcomment = function() {
		    	$scope.showfollower = false;
		    	$http.get(baseURL+'getdata/discussion/' + $scope.id_artist)
					    .success(function(data) {
					    	$scope.dataDiscusses = data;
					    })
		    };
		    $scope.showfavourite = function() {
		    	$scope.showfollower = true;
		    	$http.get(baseURL+'getdata/favouritedBy?id='+$scope.id_artist)
				    .success(function(data) {
						$scope.dataFavourite = [];
				    	$scope.dataFavourite = data;
		    		})
		    };
            $scope.$on('discussion:add', function(event, data) {
                //$scope.commentPosts.push(data);
                 $scope.dataDiscusses.unshift(data);
                $scope.commentarea="";
            });
		$scope.submitForm = function() {
	  			$scope.url = baseURL+'new_post/add_discuss';
	  			$scope.refreshcomment = false;
	  			$http({
				 method: 'POST',
				 url: $scope.url,
				 headers: {'Content-Type': 'application/json'},
				 data: JSON.stringify({
				 	id:$scope.id_artist,
				 	text:$scope.commentarea
				 })
				 }).success(function (data, status, headers, cfg) {
				 	// Without socketio
				 	$http.get(baseURL+'getdata/discussion/' + $scope.id_artist)
					    .success(function(data) {
					    	$scope.dataDiscusses = data;
					    })
 					/*$scope.$emit('discussion:add',
 					{	
 						'comment': $scope.commentarea,
 						'date':  new Date(),
						'display_name': $scope.cache_name,
 						'picture': $scope.cache_picture, 
						'username': $scope.cache_username,
					});*/
				 	//scope.refreshcomment = true;
				 	$scope.addDiscussForm.$setPristine();
          			$scope.commentarea = '';
				 })
				 .error(function(data, status, headers, cfg) {
				 	alert("Error !! Please try again later!!");
			    });

		        };
				});
	});
	    /*vokalplusApp.filter('pagination', function()
		{
		 return function(inputs, start) {
		 	var input = inputs;
	        start = +start; //parse to int
	        return input.slice(start);
	    }
		});*/
		vokalplusApp.filter('startFrom', function () {
			return function (input, start) {
				if (input) {
					start = +start;
					return input.slice(start);
				}
				return [];
			};
		});
	

   		vokalplusApp.directive('getApplause', function($http) {
		  return {
		  	scope: {
		      postId: '@postId'
		    },
		  	link : function(scope, element, attrs) {
			  	scope.postapplause= function () {
			  		$http.post(baseURL+'new_post/applause', {id:scope.postId})
				      .success(function(data, status, headers, config) {
					    // this callback will be called asynchronously
					    // when the response is available
					    	scope.applausing = true;
					  })
				};
				scope.postunapplause= function () {
			       		$http.post(baseURL+'new_post/unapplause', {id:scope.postId})
				      .success(function(data, status, headers, config) {
					    // this callback will be called asynchronously
					    // when the response is available
					    	scope.applausing = false;
					  })
					  };
		      return $http.post(baseURL+'member/checkApplause/', {id:scope.postId})
		      .success(function(data, status, headers, config) {
			    // this callback will be called asynchronously
			    // when the response is available
			    if(data.status == 'success'){
			    	scope.applausing = true;
			    } else {
			    	scope.applausing = false;
			    }
			    
			  }).
			  error(function(data, status, headers, config) {
			    // called asynchronously if an error occurs
			    // or server returns response with an error status.
			    alert('There was a network error. Try again later.');
			  });
			   scope.$watch('applausing', function (val) {
	                  if (val){
	                      $(element).show();
	                  	} else{
	                      $(element).hide();
	                  	}
	              });
			    
		    },
		    templateUrl: function(){
		      return 'applause.html';
		    }
		  };
		});

	vokalplusApp.directive('addCommentpost', function($http) {
		  return {
		  	scope: {
		      postId: '@postId',
		      memberData : '@memberData'
		    },
		    controller: function($scope, $attrs) {
		    var jsondata = JSON.parse($scope.memberData);
		    $scope.data = jsondata;
		    $scope.commentPosts= [];
            $scope.$on('comment:add', function(event, data) {
                //$scope.commentPosts.push(data);
                 $scope.commentPosts.unshift(data);
                $scope.commentarea="";
            });
        	},
		  	link : function(scope, element, attrs) {
	  		scope.submitForm = function() {
	  			scope.url = baseURL+'new_post/add_comment';
	  			scope.refreshcomment = false;
	  			$http({
				 method: 'POST',
				 url: scope.url,
				 headers: {'Content-Type': 'application/json'},
				 data: JSON.stringify({
				 	id:scope.postId,
				 	text:scope.commentarea
				 })
				 }).success(function (data, status, headers, cfg) {
 					// Without socketio
				 	$http.get(baseURL+'getdata/getcomment/'+scope.postId)
					    .success(function(data) {
					    	$scope.dataDiscusses = data;
					 })
 					/*scope.$emit('comment:add',
 					{	
 						'comment': scope.commentarea,
 						'date':  new Date(),
						'display_name': scope.data.display_name,
 						'picture': scope.data.picture, 
						'username': scope.data.username,
					});*/
				 	//scope.refreshcomment = true;
				 	scope.addCommentForm.$setPristine();
          			scope.commentarea = '';
				 })
				 .error(function(data, status, headers, cfg) {
				 	alert("Error !! Please try again later!!");
			    });

		        };
		  		return $http.get(baseURL+'getdata/getcomment/'+scope.postId)
			      .success(function(data, status, headers, config) {
				    // this callback will be called asynchronously
				    // when the response is available
		    		scope.commentPosts = data;
				    
				    
				  }).
				  error(function(data, status, headers, config) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    alert('There was a network error. Try again later.');
				  });

		    },
		    templateUrl: function(){
		      return 'addcomment.html';
		    }
		  };
		});

	  vokalplusApp.controller('addTestiController', function($scope,$sce,$modalInstance,$http,to_member,to_displayname,to_username) {
			    				$scope.to_member = to_member;
			    				$scope.to_displayname = to_displayname;
			    				$scope.to_username = to_username;
			        // function to submit the form after all validation has occurred            
			       				
						        $scope.submitForm = function() {
						  			$scope.submitted = true;
						            console.log("posting new add_testimonial....");
						    		$scope.url = baseURL+'member/add_testimonial';
			        				//$scope.id_receiver = document.getElementById('receivertesti').value;
						        	var text= AddTestiForm.elements["testi_txt"].value;
						    		$http({
									 method: 'POST',
									 url: $scope.url,
									 headers: {'Content-Type': 'application/json'},
									 data: JSON.stringify({
									 	id:$scope.to_member,
									 	text:text
									 })
									 }).success(function (data, status, headers, cfg) {
									 if(data.status == 'success'){
										//$('#submit-testimonial').foundation('reveal', 'close');
						                alert(data.message);
								   		$modalInstance.dismiss('cancel');
						                //window.location.href = baseURL+$scope.username;
									 }else{
									  $scope.message = data.message;
									 }
									 })
									 .error(function(data, status, headers, cfg) {
									 	alert("Error !! Please try again later!!");
								    });

						        };
						        $scope.cancel = function () {
								   $modalInstance.dismiss('cancel');
								};

			    });

		vokalplusApp.directive('loading', function () {
			var imgLoad = baseURL+"assets/img/process.gif";
		      return {
		        restrict: 'E',
		        replace:true,
		        template: '<div class="loading" align="center"><img src="'+imgLoad+'"/><br>Please wait...</div>',
		        link: function (scope, element, attr) {
		              scope.$watch('loading', function (val) {
		                  if (val)
		                      $(element).show();
		                  else
		                      $(element).hide();
		              });
		        }
		      }
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
		      	
		      	scope.avatar_url = avatar_url.replace("large", "t300x300");
		      	if (artwork_url != null){
		      	scope.artwork_url = artwork_url.replace("large", "t300x300");;
		      	} else {
		      	scope.artwork_url = null;	
		      	}
		      });
		    },
		    template: '<div class="thumb-sc" ng-show="artwork_url ==null"><img src="{{avatar_url}}" alt="" class="lazy" onerror="imgError(this);"></div><div class="thumb-sc" ng-show="artwork_url !=null"><img src="{{artwork_url}}" alt="" class="lazy" onerror="imgError(this);"></div>'
		  }
		});
	vokalplusApp.directive('imgCropped', function () {
		    return {
		        restrict: 'E',
		        replace: true,
		        scope: { src: '@', selected: '&' },
		        link: function (scope, element, attr) {
		            var myImg;
		            var clear = function () {
		                if (myImg) {
		                    myImg.next().remove();
		                    myImg.remove();
		                    myImg = undefined;
		                }
		            };
		 
		            scope.$watch('src', function (nv) {
		                clear();
		                if (nv) {
		                    element.after('<img />');
		                    myImg = element.next();
		                    myImg.attr('src', nv);
		                    myImg.css({ "height": "100%", "display": "block","margin": "10px !important" });
		                    $(myImg).Jcrop({
		                        trackDocument: true,
		                        onSelect: function (x) {
		                            scope.$apply(function () {
		                                scope.selected({ cords: x });
		                            });
		                        },
		                        aspectRatio: 1.78
		                    }, function () {
		                        // Use the API to get the real image size 
		                        var bounds = this.getBounds();
		                        boundx = bounds[0];
		                        boundy = bounds[1];
		                    });
		                }
		            });
		            scope.$on('$destroy', clear);
		        }
		    };
		});
	/*vokalplusApp.directive('commentCount', function($http) {
		  return {
		  	scope: {
		      postId: '@postId'
		    },
		  	link : function(scope, element, attrs) {
		      return $http.get(baseURL+'getdata/countcomment?id='+scope.postId)
			      .success(function(data) {
				    // this callback will be called asynchronously
				    // when the response is available
				    scope.counting = data;			    
				  }).
				  error(function(data, status, headers, config) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    alert('There was a network error. Try again later.');
				  });
			    
		    },
		    templateUrl: function(){
		      return 'count-comment.html';
		    }
		  };
		});

		vokalplusApp.directive('applauseCount', function($http) {
		  return {
		  	scope: {
		      postId: '@postId'
		    },
		  	link : function(scope, element, attrs) {
		      return $http.get(baseURL+'getdata/countapplause?id='+scope.postId)
			      .success(function(data) {
				    // this callback will be called asynchronously
				    // when the response is available
				    scope.applausecount = data;			    
				  }).
				  error(function(data, status, headers, config) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    alert('There was a network error. Try again later.');
				  });
			    
		    },
		    templateUrl: function(){
		      return 'count-applause.html';
		    }
		  };
		});
		angular.module('app').controller("ImageCropperCtrl",[ '$scope', function($scope) 
{
        $scope.cropper = {};
        $scope.cropper.sourceImage = null;
        $scope.cropper.croppedImage   = null;
}]);*/




