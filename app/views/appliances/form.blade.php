
<h1>Aparelho</h1>

<form ng-submit="save(appliance)" method="POST">

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array(
			'class' => 'form-control',
			'ng-model'=>'appliance.name'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('customer', 'Cliente') }}
		 <input type="text" id="customer_name"  ng-keyup="searchCustomer(appliance.customer.name)"  ng-model="appliance.customer.name" class="form-control input-lg" 
		 placeholder="Cliente"  autocomplete="off">

		 <div ng-repeat="customer in customers">
		 	<small><a id="autocompleting" value="@{{customer.name}}" ng-click="selectCustomer(customer)">@{{customer.name}}</a></small>
		 </div>
	</div>

	<div class="form-group">
		{{ Form::label('model', 'Modelo') }}
		{{ Form::text('model', null, array(
			'class' => 'form-control',
			'ng-model'=>'appliance.model'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('serie', 'Série') }}
		{{ Form::text('serie', null, array(
			'class' => 'form-control',
			'ng-model'=>'appliance.serie'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('brand', 'Marca') }}
		{{ Form::text('brand', null, array(
			'class' => 'form-control',
			'ng-model'=>'appliance.brand'
		)) }}
	</div>


	<div class="form-group">
		{{ Form::label('obs', 'Observações') }}
		{{ Form::text('obs', null, array(
			'class' => 'form-control',
			'ng-model'=>'appliance.obs'
		)) }}
	</div>


	{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}

</form>