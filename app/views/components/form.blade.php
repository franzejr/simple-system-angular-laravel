
<h1>Componente</h1>

<form ng-submit="save(component)" method="POST">

	<div class="form-group">
		{{ Form::label('name', 'Nome') }}
		{{ Form::text('name', null, array(
			'class' => 'form-control',
			'ng-model'=> 'component.name'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('code', 'Código') }}
		{{ Form::text('code', null, array(
		'class' => 'form-control',
		'ng-model' => 'component.code'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('quantity', 'Quantidade') }}
		{{ Form::text('quantity', null, array(
			'class' => 'form-control',
			'ng-model'=>'component.quantity'
		)) }}
	</div>

	<div class="form-group">
		{{ Form::label('obs', 'Observações') }}
		{{ Form::text('obs', null, array(
			'class' => 'form-control',
			'ng-model' => 'component.obs'
		)) }}
	</div>


	{{ Form::submit('Adicionar', array('class' => 'btn btn-primary')) }}

</form>
