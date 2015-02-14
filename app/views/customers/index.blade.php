<div class="col-lg-12">
    <h1 class="page-header">Clientes</h1>
</div>

<a ng-click="addCustomer()" class="btn btn-small btn-success">Adicionar Cliente</a>
 <div class="form-group pull-right form-inline">
   <div class="col-sm-16">
      
      <input type="text" class="form-control" ng-model="filterSearch" placeholder="Buscar por Clientes">
	</div>
  </div>
	
<div class="panel-body">
	<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<td width="5%">ID</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Celular</td>
			<td width="20%">Ações</td>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="customer in customers | filter:filterSearch">

			<td>@{{ customer.id }}</td>
			<td>@{{ customer.name }}</td>
			<td>@{{ customer.phone }}</td>
			<td>@{{ customer.mobile }}</td>
			<td>
					<a ng-click="showCustomer(customer.id)" class="btn btn-small btn-success">Ver</a>
					<a ng-click="editCustomer(customer.id)" class="btn btn-small btn-info">Editar</a>				
			</td>
		</tr>
	</tbody>
</table>
</div>	