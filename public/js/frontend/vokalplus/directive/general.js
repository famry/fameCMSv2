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