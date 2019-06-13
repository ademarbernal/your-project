@extends('home')
@section('title', 'Empleados')
@section('content')
<div id="fh5co-services">
			<h3 class="text-center">TIPOS DE EVENTO</h3>
			
				<!--modal add --------------------------------->
			    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			      <div class="modal-dialog" role="document">
			        <div class="modal-content">
			          <div class="modal-header">
			            <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body">
			            <!--formulario-->
			            <div class="panel-body">
			              <form method="POST" action="{{ action('TipoController@store') }}">
			                {{ csrf_field() }}

			                <label>Nombre</label>
			                <input type="text" name="nombre" class="form-control form-control-sm" placeholder="ingresar nombre tipo evento">
			                <label>Costo</label>
			                <input type="text" name="costo" class="form-control form-control-sm" placeholder="costo Bs.">
			                <label>Descripcion</label>
			                <textarea class="form-control" placeholder="Descripcion de la Promoción" rows="3" name="descripcion"></textarea><br>
			                <button type="submit" class="btn btn-success">Agregar</button>
			              </form>
			            </div>
			            <!--final formulario-->
			          </div>
			          <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			          </div>
			        </div>
			      </div>
			    </div>
			    <!--fin add modal-->
			    <!--modal edit ----------------------------->
				    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				      <div class="modal-dialog" role="document">
				        <div class="modal-content">
				          <div class="modal-header">
				            <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				              <span aria-hidden="true">&times;</span>
				            </button>
				          </div>
				          <div class="modal-body">
				            <!--formulario-->
				            <div class="panel-body">
				              <form action="/tipos" method="POST" id="editForm">
				                {{ csrf_field() }}
				                {{ method_field('PUT') }}

				                <label>Nombre</label>
				                <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" placeholder="ingresar nombre tipo evento">
				                <label>Costo</label>
				                <input type="text" name="costo" id="costo" class="form-control form-control-sm" placeholder="costo Bs.">
				                <label>Descripcion</label>
				                <textarea class="form-control" placeholder="Descripcion de la Promoción" rows="3" name="descripcion" id="descripcion"></textarea><br>
				                <button type="submit" class="btn btn-success">Modificar</button>
				              </form>
				            </div>
				            <!--final formulario-->
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				          </div>
				        </div>
				      </div>
				    </div>
				    <!--fin edit modal-->
				    <!--modal delete-->
				    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				      <div class="modal-dialog" role="document">
				        <div class="modal-content">
				          <div class="modal-header">
				            <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				              <span aria-hidden="true">&times;</span>
				            </button>
				          </div>
				          <div class="modal-body">
				            <!--formulario-->
				            <div class="panel-body">
				              <form action="/employee" method="POST" id="deleteForm">
				                {{ csrf_field() }}
				                {{ method_field('DELETE') }}

				                <input type="hidden" name="_method" value="DELETE">
				                <p>Está seguro que desea eliminar esta información?<br><br>luego no se arrepienta..!!</p>
				         		<br>

				                <button type="submit" class="btn btn-success">Si.! Eliminar</button>
				              </form>
				            </div>
				            <!--final formulario-->
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				          </div>
				        </div>
				      </div>
				    </div>
				    <!--fin delete modal-->

				<div class="container">
					@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
					@endif

					<a href="#" class="btn btn-info" data-toggle="modal" data-target="#add">+ Agregar</a>
				</div>
				<br>
				<table id="datatable" class="table display AllDataTables">
					<thead>
						<tr>
							<th class="col-md-1 text-center">Id</th>
							<th class="col-md-2 text-center">Nombre</th>
							<th class="col-md-2 text-center">Costo</th>
							<th class="col-md-3 text-center">Descripcion</th>
							<th class="col-md-2 text-center">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tipos as $tipo)
						<tr>
							<th>{{ $tipo->id }}</th>
							<th>{{ $tipo->nombre }}</th>
							<th>{{ $tipo->costo }}</th>
							<th>{{ $tipo->descripcion }}</th>
							<th class="text-center">
								<a href="#" class="btn btn-primary btn-sm glyphicon glyphicon-pencil edit" data-toggle="modal"></a>
								<a href="#" class="btn btn-danger btn-sm glyphicon glyphicon-trash delete" data-toggle="modal"></a>
							</th>
						</tr> 
						@endforeach
					</tbody>
				</table>
			
		</div>
@endsection