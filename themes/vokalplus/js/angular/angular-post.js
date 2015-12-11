vokalplusApp.controller('MusicPostController', function($scope,$http,$modal) {
    	

    	$scope.preview_post= function (type) {
    		tinyMCE.triggerSave();
    		var desc= newMusicForm.elements["song_desc"].value;
        	var genre= newMusicForm.elements["song_genre"].selectedIndex;
		       	//$scope.type_post = type;
		       	$scope.alldata = [
		       	{ 
		       	type_post : type,
		       	sc_url : $scope.song_url,
		       	title_post : $scope.song_title,
		       	desc : desc,
		       	genre : genre
		       	}
		       	];
				    var modalInstance = $modal.open({
				      templateUrl: 'post_preview.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'previewController',
				      resolve: {
					        previewdata: function () {
					          return $scope.alldata;
					        }
					      }
				    });

				  };
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	tinyMCE.triggerSave();
        	var desc= newMusicForm.elements["song_desc"].value;
        	var genre= newMusicForm.elements["song_genre"].selectedIndex;
        	if (genre){
        	$scope.submitted = true;
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
			 	 window.location.href = baseURL+$scope.cache_username;
			 }else{
			 alert(data.message);
			 }
			 });
			} else {
	        	alert("Select your music genre first!!");
			}
        };

    });
    	// create angular controller
    vokalplusApp.controller('VideoPostController', function($scope,$http,$modal) {

    	$scope.preview_post= function (type) {
    		tinyMCE.triggerSave();
        	var desc= newVideoForm.elements["video_desc"].value;
        	var genre= newVideoForm.elements["video_genre"].selectedIndex;
		       	//$scope.type_post = type;
		       	$scope.alldata = [
		       	{ 
		       	type_post : type,
		       	youtube_url : $scope.video_url,
		       	title_post : $scope.video_title,
		       	desc : desc,
		       	genre : genre
		       	}
		       	];
				    var modalInstance = $modal.open({
				      templateUrl: 'post_preview.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'previewController',
				      resolve: {
					        previewdata: function () {
					          return $scope.alldata;
					        }
					      }
				    });

				  };
    	
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	tinyMCE.triggerSave();
        	$scope.submitted = true;
        	var desc= newVideoForm.elements["video_desc"].value;
        	var genre= newVideoForm.elements["video_genre"].selectedIndex;
        	if (genre){
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
			 	 window.location.href = baseURL+$scope.cache_username;
			 }else{
			 alert(data.message);
			 }
			 });
			} else {
	        	alert("Select your video genre first!!");
			}
        };

    });

     vokalplusApp.controller('ArticlePostController', function($scope,$http,$modal) {
     	 $('#newarticle-image-editor').cropit({
          imageBackground: true,
          imageBackgroundBorderWidth: 15,
          smallImage : 'stretch'
        });
    	$scope.preview_post= function (type) {
    		tinyMCE.triggerSave();
    		var img = $('#newarticle-image-editor').cropit('export',{
							  type: 'image/jpeg',
							  quality: .9,
							  originalSize: true
							});
        	var desc= newArticleForm.elements["article_content"].value;
		       	//$scope.type_post = type;
		       	$scope.alldata = [
		       	{ 
		       	type_post : type,
		       	title_post : $scope.article_title,
		       	img : img,
		       	desc : desc,
		       	}
		       	];
				    var modalInstance = $modal.open({
				      templateUrl: 'post_preview.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'previewController',
				      resolve: {
					        previewdata: function () {
					          return $scope.alldata;
					        }
					      }
				    });

				  };
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	//var img= newArticleForm.elements["article_img"].value;
        	var image_article = $('#newarticle-image-editor').cropit('export',{
							  type: 'image/jpeg',
							  quality: .9,
							  originalSize: true
							});
        	var desc= newArticleForm.elements["article_content"].value;
        	tinyMCE.triggerSave();
        	$scope.submitted = true;
        	
        	
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_article',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.article_title,
			 	img: image_article,
			 	desc:desc
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your article post has been successfully posted!!');
				 document.getElementById("post-new-article").reset();
			 	 window.location.href = baseURL+$scope.cache_username;
			 }else{
			 alert(data.message);
			 }
			 });
    	};

    });
     vokalplusApp.controller('EventPostController', function($scope,$http,$modal) {
     	$('#newevent-image-editor').cropit({
          imageBackground: true,
          imageBackgroundBorderWidth: 15,
          smallImage : 'stretch'
        });
    	$scope.preview_post= function (type) {
    		tinyMCE.triggerSave();
    		var img = $('#newevent-image-editor').cropit('export',{
							  type: 'image/jpeg',
							  quality: .9,
							  originalSize: true
							});
        	var desc= newEventForm.elements["event_content"].value;
        	var start_date= newEventForm.elements["start_date"].value;
        	var end_date= newEventForm.elements["end_date"].value;
        	var venue= newEventForm.elements["venue"].value;
        	var map = $('#eventmap').attr('src');
		       	//$scope.type_post = type;
		       	$scope.alldata = [
		       	{ 
		       	type_post : type,
		       	image_post: img,
		       	title_post : $scope.event_title,
		       	start_date : start_date,
		       	start_time : $scope.start_time,
		       	end_date: end_date,
			 	end_time: $scope.end_time,
			 	venue: venue,
		       	desc : desc,
		       	}
		       	];
				    var modalInstance = $modal.open({
				      templateUrl: 'post_preview.html',
				      windowClass: 'post content-music reveal-modal',
      				  controller: 'previewController',
				      resolve: {
					        previewdata: function () {
					          return $scope.alldata;
					        }
					      }
				    });

				  };
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {
        	$scope.submitted = true;
        	tinyMCE.triggerSave();
        	var image_event = $('#newevent-image-editor').cropit('export',{
							  type: 'image/jpeg',
							  quality: .9,
							  originalSize: true
							});
        	var desc= newEventForm.elements["event_content"].value;
        	var start_date= newEventForm.elements["start_date"].value;
        	var end_date= newEventForm.elements["end_date"].value;
        	$http({
			 method: 'POST',
			 url: baseURL+'new_post/add_event',
			headers: {'Content-Type': 'application/json'},
			 data: JSON.stringify({
			 	title: $scope.event_title,
			 	img: image_event,
			 	start_date: start_date,
			 	start_time: $scope.start_time,
			 	end_date: end_date,
			 	end_time: $scope.end_time,
			 	venue: $scope.venue,
			 	desc:desc
			 })
			 }).success(function (data , status, headers, cfg) {
			 if(data.status == 'success'){
			 	 alert('Your event post has been successfully posted!!');
				 document.getElementById("post-new-event").reset();
			 	 window.location.href = baseURL+$scope.cache_username;
			 }else{
			 alert(data.message);
			 }
			 });
        };

    });
	 vokalplusApp.controller('previewController', function($scope,$sce,$modalInstance,$http,previewdata) {

    				$scope.type_post = previewdata[0].type_post;
    				if($scope.type_post == 'music'){
    				var sc_embed = "https://w.soundcloud.com/player/?url="+previewdata[0].sc_url+"&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true";
    				$scope.sc_url = $sce.trustAsResourceUrl(sc_embed);
    				$scope.genre = previewdata[0].genre;
    				}
    				if($scope.type_post == 'video'){
				  	var changehttp= previewdata[0].youtube_url.replace("https", "http");
					var urlvideo= changehttp.replace("http://www.youtube.com/watch?v=", "http://www.youtube.com/embed/"); 
					$scope.youtube_url = $sce.trustAsResourceUrl(urlvideo);
					$scope.genre = previewdata[0].genre;
					}
					if ($scope.type_post == 'article'){
					$scope.image_post = previewdata[0].img;
					}
					if ($scope.type_post =='event'){

						$scope.image_event = previewdata[0].image_post;
						$scope.start_date = moment(previewdata[0].start_date).format('MMMM/Do/YYYY');
				        $scope.start_time = previewdata[0].start_time;
				       	$scope.end_date = moment(previewdata[0].end_date).format('MMMM/Do/YYYY');
					 	$scope.end_time = previewdata[0].end_time;
					 	var venue = previewdata[0].venue.split(",");
					 	$scope.venue = venue[0];
					 	var address = previewdata[0].venue.replace($scope.venue,"");
					 	$scope.address = address.slice(2);
					 	var changemaps= previewdata[0].venue.replace(" ","+");
					 	$scope.maps = $sce.trustAsResourceUrl("https://www.google.com/maps/embed/v1/place?key=AIzaSyA25n4dacMtbs63AOe1BJ4G-8sPercz6e8&q="+changemaps);
					 	if ($scope.start_date == $scope.end_date){
					 		$scope.timeevent = $scope.start_date+' at '+$scope.start_time+' - '+$scope.end_time;
					 	} else { 
					 		$scope.timeevent = $scope.start_date+' - '+$scope.end_date+' at '+$scope.start_time+' - '+$scope.end_time;
					 	};
					}
    				$scope.title_post = previewdata[0].title_post;
    				$scope.htmlcontent = $sce.trustAsHtml(previewdata[0].desc);
    				
    				$scope.display_name = "Author's Name";
        // function to submit the form after all validation has occurred            
       				
			        $scope.cancel = function () {
					   $modalInstance.dismiss('cancel');
					};

    });