
<div class="col-lg-12">
    <h1 class="page-header">Aparelhos</h1>
</div>

<a ng-click="addAppliance()" class="btn btn-small btn-success">Adicionar Aparelhos</a>
 <div class="form-group pull-right form-inline">
   <div class="col-sm-22">
      <input type="text" class="form-control" ng-model="filterSearch" placeholder="Buscar Aparelhos">
	</div>
  </div>
	
<div class="panel-body">
	<table class="table table-striped table-bordered table-hover ">
	<thead>
		<tr>
			<td width="5%">Nome</td>
			<td>Modelo</td>
			<td>Marca</td>
			<td width="20%">Ações</td>
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="appliance in appliances | filter:filterSearch">
			<td>@{{ appliance.name }}</td>
			<td>@{{ appliance.model }}</td>
			<td>@{{ appliance.brand }}</td>
			<td>
				<a  ng-click="showAppliance(appliance.id)" class="btn btn-small btn-success" >Ver</a>
				<a  ng-click="editAppliance(appliance.id)" class="btn btn-small btn-info">Editar</a>				
				
			</td>
		</tr>

	</tbody>
</table>
</div>

