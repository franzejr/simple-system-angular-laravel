var app = angular.module('app',['ngRoute', 'angular-loading-bar', 'ngAnimate','ngResource']);

app.config(['$routeProvider',function($routeProvider){
	$routeProvider
	.when('/dashboard',{
		templateUrl:'template/customers/index.html'
	})
	.when('/customers',{
		templateUrl:'template/customers/index.html',
		controller: 'CustomersController'
	})
	.when('/customers/create',{
		templateUrl:'template/customers/form.html',
		controller: 'CustomersControllerForm'
	})
	.when('/customers/:id/edit',{
		templateUrl:'template/customers/form.html',
		controller: 'CustomersControllerForm'
	})
	.when('/components',{
		templateUrl:'template/components/index.html',
		controller: 'ComponentsController'
	})
	.when('/components/create',{
		templateUrl:'template/components/form.html',
		controller: 'ComponentsControllerForm'
	})
	.when('/appliances',{
		templateUrl:'template/appliances/index.html',
		controller: 'AppliancesController'
	})
	.when('/appliances/create',{
		templateUrl:'template/appliances/form.html',
		controller: 'AppliancesControllerForm'
	})
	.when('/appliances/:id/edit',{
		templateUrl:'template/appliances/form.html',
		controller: 'AppliancesControllerForm'
	})
	.otherwise({redirectTo:'/dashboard'});
}]);


/* Customers */

app.factory('Customer',['$resource',function($resource){
	return $resource('api/v1/customers/:id', null, {
		'update':   {method:'PUT'}
	});
}]);

app.controller('CustomersController', ['$scope','$location','Customer',function($scope,$location,Customer){
	
	$scope.getCustomers = function(){
		Customer.query().$promise.then(function(data){
			$scope.customers = data;
		});
	}

	$scope.addCustomer = function(){
		$location.url('customers/create');
	}

	$scope.editCustomer = function(id){
		$location.url('customers/'+id+'/edit');
	}

	$scope.deleteCustomer = function(id){
		Customer.update({id:id});
	}

	$scope.getCustomers();

}]);

app.controller('CustomersControllerForm', ['$scope', '$location','Customer','$routeParams',function($scope,$location, Customer, $routeParams){
	
	$scope.customer = {};

	$scope.fetchResult = function(){
		if($routeParams.id){
			Customer.get({id: $routeParams.id}).$promise.then(function(data){
				$scope.customer = data;
			});
		}
	}

	$scope.save = function($customer){
		if($routeParams.id){
			$scope.update($customer);
		}else{
			$scope.create($customer);
		}
		$scope.goToInitialPage();
	}

	$scope.create = function($customer){
		var c = new Customer($customer);
		c.$save();
	}

	$scope.update = function($customer){
		Customer.update({id: $routeParams.id}, $customer);
	}

	$scope.goToInitialPage = function(){
		$location.url('customers/');
	}

 
	$scope.fetchResult();

}]);

/* Components */

app.factory('Component',['$resource',function($resource){
	return $resource('api/v1/components/:id',{
		'update':   {method:'PUT'}
	});
}]);

app.controller('ComponentsController', ['$scope','$location','Component',function($scope,$location, Component){
	
	$scope.getComponents = function(){
	Component.query().$promise.then(function(data){
		$scope.components = data;
	});
	}

	$scope.addComponent = function(){
		$location.url('components/create');
	}

	$scope.editComponent = function(id){
		$location.url('components/'+id+'/edit');
	}

	$scope.deleteComponent = function(id){
		Component.delete({id:id});
	}

	$scope.getComponents();

}]);

app.controller('ComponentsControllerForm', ['$scope','$location','Component','$routeParams',function($scope, $location,Component, $routeParams){
	
	$scope.component = {};

	$scope.fetchResult = function(){
		if($routeParams.id){
			Component.get({id: $routeParams.id}).$promise.then(function(data){
				$scope.component = data;
			});
		}
	}

	$scope.save = function($component){
		if($routeParams.id){
			$scope.update($component);
		}else{
			$scope.create($component);
		}
		$scope.goToInitialPage();
	}

	$scope.create = function($component){
		var c = new Component($component);
		c.$save();
	}

	$scope.update = function($component){
		Component.update({id: $routeParams.id}, $component);
	}

	$scope.goToInitialPage = function(){
		$location.url('components/');
	}

	$scope.fetchResult();

}]);


/* Appliances */

app.factory('Appliance',['$resource',function($resource){
	return $resource('api/v1/appliances/:id',null,{
		'update':   {method:'PUT'}
	});
}]);

app.controller('AppliancesController', ['$scope','$location','Appliance',function($scope, $location,Appliance){
	
	$scope.getAppliances = function(){
		Appliance.query().$promise.then(function(data){
			$scope.appliances = data;
		});
	}

	$scope.addAppliance = function(){
		$location.url('appliances/create');
	}

	$scope.editAppliance = function(id){
		$location.url('appliances/'+id+'/edit');
	}

	$scope.delete = function(id){
		Appliance.delete({id:id});
	}

	$scope.getAppliances();

}]);

app.controller('AppliancesControllerForm', ['$scope','$location','Appliance','Customer','$routeParams',function($scope, $location,Appliance, Customer,$routeParams){
	
	$scope.appliance = {};
	$scope.appliance.customer = {name: ""};
	$scope.customers = {};

	$scope.fetchResult = function(){
		if($routeParams.id){
			Appliance.get({id: $routeParams.id}).$promise.then(function(data){
				$scope.appliance = data;
			});
		}
	}

	$scope.save = function($appliance){
		if($routeParams.id){
			$scope.update($appliance);
		}else{
			$scope.create($appliance);
		}
		$scope.goToInitialPage();
	}

	$scope.create = function($appliance){
		var c = new Appliance($appliance);
		c.$save();
	}

	$scope.update = function($appliance){
		Appliance.update({id: $routeParams.id}, $appliance);
	}

	$scope.goToInitialPage = function(){
		$location.url('appliances/');
	}

	$scope.searchCustomer = function($customer){
		Customer.query({name: $customer}).$promise.then(function(data){
				$scope.customers = data;
		});
	}

	$scope.selectCustomer = function(customer){
		$scope.appliance.customer_id = customer.id;
		$("#autocompleting").hide();
		$scope.appliance.customer.name = customer.name;
	}

	$scope.fetchResult();

}]);