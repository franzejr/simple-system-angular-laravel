
<div class="col-lg-12">
    <h1 class="page-header">Componentes</h1>
</div>

<a ng-click="addComponent()" class="btn btn-small btn-success">Adicionar Componente</a>
 <div class="form-group pull-right form-inline">
   <div class="col-sm-22">
      <input type="text" class="form-control" ng-model="filterSearch" placeholder="Buscar Componentes">
	</div>
  </div>
	
<div class="panel-body">
	<table class="table table-striped table-bordered table-hover ">
	<thead>
		<tr>
			<td width="5%">ID</td>
			<td>Nome</td>
			<td>Marca</td>
			<td width="20%">Ações</td>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="component in components | filter:filterSearch">
			<td>@{{ component.id }}</td>
			<td>@{{ component.name }}</td>
			<td>@{{ component.brand }}</td>
			<td>
				<a  ng-click="showComponent(component.id)" class="btn btn-small btn-success" >Ver</a>
				<a  ng-click="editComponent(component.id)" class="btn btn-small btn-info">Editar</a>				
				
			</td>
		</tr>

	</tbody>
</table>
</div>

