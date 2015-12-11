  // Email Exist
	fameAdminApp.directive('emailAvailable', ['$http', function($http) {
	  return {
	    require : 'ngModel',
	    link : function(scope, element, attrs, ngModel) {
	      ngModel.$asyncValidators.emailAvailable = function(email) {
	        return $http.post(baseUrl+'administrator/checkExistEmail', {email:email}).
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
	fameAdminApp.directive('usernameAvailable', ['$http', function($http) {
	  return {
	    require : 'ngModel',
	    link : function(scope, element, attrs, ngModel) {
	      ngModel.$asyncValidators.usernameAvailable = function(username) {
	        return $http.post(baseUrl+'administrator/checkExistUsername', {username:username}).
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
	 fameAdminApp.directive('passwordMatch', [function () {
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
	// Username Exist
	fameAdminApp.directive('officialPageAvailable', ['$http', function($http) {
	  return {
	    require : 'ngModel',
	    link : function(scope, element, attrs, ngModel) {
	      ngModel.$asyncValidators.officialPageAvailable = function(pagename) {
	        return $http.post(baseUrl+'administrator/artist/checkExistOfficialPage', {pagename:pagename}).
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
	}]);

	var waitingDialog = waitingDialog || (function ($) {
                'use strict';

                // Creating modal dialog's DOM
                var $dialog = $(
                    '<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
                    '<div class="modal-dialog modal-m">' +
                    '<div class="modal-content">' +
                        '<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
                        '<div class="modal-body">' +
                            '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
                        '</div>' +
                    '</div></div></div>');

                return {
                    /**
                     * Opens our dialog
                     * @param message Custom message
                     * @param options Custom options:
                     *                options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
                     *                options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
                     */
                    show: function (message, options) {
                        // Assigning defaults
                        if (typeof options === 'undefined') {
                            options = {};
                        }
                        if (typeof message === 'undefined') {
                            message = 'Loading';
                        }
                        var settings = $.extend({
                            dialogSize: 'm',
                            progressType: '',
                            onHide: null // This callback runs after the dialog was hidden
                        }, options);

                        // Configuring dialog
                        $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
                        $dialog.find('.progress-bar').attr('class', 'progress-bar');
                        if (settings.progressType) {
                            $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
                        }
                        $dialog.find('h3').text(message);
                        // Adding callbacks
                        if (typeof settings.onHide === 'function') {
                            $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                                settings.onHide.call($dialog);
                            });
                        }
                        // Opening dialog
                        $dialog.modal();
                    },
                    /**
                     * Closes dialog
                     */
                    hide: function () {
                        $dialog.modal('hide');
                    }
                };

            })(jQuery);