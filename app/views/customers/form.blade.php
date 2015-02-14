
<h1>Cliente</h1>
<form ng-submit="save(customer)" method="POST">

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.name'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('address', 'Endereço') }}
		{{ Form::text('address', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.address'
		))}}
	</div>

	<div class="form-group">
		{{ Form::label('phone', 'Telefone') }}
		{{ Form::text('phone', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.phone' 
		))}}
	</div>

	<div class="form-group">
		{{ Form::label('mobile', 'Celular') }}
		{{ Form::text('mobile', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.mobile' 
		))}}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.email'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('obs', 'Observações') }}
		{{ Form::text('obs', null, array(
			'class' => 'form-control',
			'ng-model'=>'customer.obs'
		)) }}
	</div>



	{{ Form::submit('Criar Cliente!', array('class' => 'btn btn-primary')) }}

</form>

