@extends('home')
@section('title', 'Empleados')
@section('content')
<div id="fh5co-services">
			<h3 class="text-center">PROMOCIONES</h3>
		
				<!--modal add --------------------------------->
				    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				      <div class="modal-dialog" role="document">
				        <div class="modal-content">
				          <div class="modal-header">
				            <h5 class="modal-title" id="exampleModalLabel">Formulario Promociones</h5>
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				              <span aria-hidden="true">&times;</span>
				            </button>
				          </div>
				          <div class="modal-body">
				            <!--formulario-->
				            <div class="panel-body">
				              <form method="POST" action="{{ action('PromocionController@store') }}">
				                {{ csrf_field() }}

				                <label>Nombre</label>
				                <input type="text" name="nombre" class="form-control form-control-sm" placeholder="ingresar nombre tipo evento">
				                <label>Costo</label>
				                <input type="text" name="costo" class="form-control form-control-sm" placeholder="costo Bs.">
				                <label>Inicio</label>
				                <input type="datetime-local" name="inicio" class="form-control form-control-sm">
				                <label>Fin</label>
				                <input type="datetime-local" name="fin" class="form-control form-control-sm">
				                <label>Descripcion</label>
				                <textarea class="form-control" placeholder="Descripcion de la Promoción" rows="3" name="descripcion"></textarea><br>
				                <button type="submit" class="btn btn-success">Agregar Nuevo</button>
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
				            <h5 class="modal-title" id="exampleModalLabel">Formulario Promociones</h5>
				            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				              <span aria-hidden="true">&times;</span>
				            </button>
				          </div>
				          <div class="modal-body">
				            <!--formulario-->
				            <div class="panel-body">
				              <form action="/promociones" method="POST" id="editForm">
				                {{ csrf_field() }}
				                {{ method_field('PUT') }}

				                <label>Nombre</label>
				                <input type="text" name="nombre" id="nombre" class="form-control form-control-sm" placeholder="ingresar nombre tipo evento">
				                <label>Costo</label>
				                <input type="text" name="costo" id="costo" class="form-control form-control-sm" placeholder="costo Bs.">
				                <label>Inicio</label>
				                <input type="datetime-local" name="inicio" id="inicio" class="form-control form-control-sm">
				                <label>Fin</label>
				                <input type="datetime-local" name="fin" id="fin" class="form-control form-control-sm">
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
				</div><br>
				<table id="datatable" class="table display AllDataTables">
					<thead>
						<tr>
							<th class=" text-center">Id</th>
							<th class="col-md-2 text-center">Nombre</th>
							<th class="col-md-2 text-center">Precio</th>
							<th class="col-md-2 text-center">Inicio</th>
							<th class="col-md-2 text-center">Fin</th>
							<th class="col-md-2 text-center">Descripcion</th>
							<th class="col-md-2 text-center">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($promos as $promo)
						<tr>
							<th>{{ $promo->id }}</th>
							<th>{{ $promo->nombre }}</th>
							<th>{{ $promo->costo }}</th>
							<th>{{ $promo->inicio }}</th>
							<th>{{ $promo->fin }}</th>
							<th>{{ $promo->descripcion }}</th>
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