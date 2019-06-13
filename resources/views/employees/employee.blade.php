@extends('home')
@section('title', 'Empleados')
@section('content')
<div class="text-center">
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  Registrar nuevo empleado
</button>
</div>
<!-- Modal Add-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: #49B7F7">
      	<font color="white" size="4">REGISTRO DE EMPLEADOS
      		 <h5 class="modal-title" class="" id="exampleModalLabel"></h5>
      	</font>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         {{-- <form href="{{ route('register') }}" method="post"> --}}
      <form action="{{ action('EmployeeController@store') }}" method="post"> 
    	{{ csrf_field() }}
      <div class="modal-body">
      
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nombre</label>
		    <input type="text" class="form-control" name="name"  aria-describedby="emailHelp" placeholder="Ej. Juan">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Apellido</label>
		    <input type="text" class="form-control" name="lname"  aria-describedby="emailHelp" placeholder="Ej. Peréz">
		  </div>

<div class="form-group">
		  <div class="col-md-6 ml-auto">
		    <label for="exampleInputEmail1">Numero de telefono</label>
		    <input type="number" class="form-control" name="number"  aria-describedby="emailHelp" placeholder="Ej. 71260809">
		  </div>

		  <div class="col-md-6 ml-auto">
		    <label for="exampleInputPassword1">Correo Electronico</label>
		    <input type="email" class="form-control" name="email" placeholder="Ej. williams@gmail.com">
		  </div>
</div>
  
  <input type="hidden" id="role" name="role" value="1">
 
  

<div class="form-group">
		    <label for="exampleInputPassword1">Dirección</label>
		    <input type="text" class="form-control" name="address" placeholder="Ej. Av. 6 de Marzo N°100">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Contraseña</label>
		    <input type="password" class="form-control" name="password" placeholder="Constraseña">
		  </div>
	  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Modal Update-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: #EA3F51">
      	<font color="white" size="4">ACTUALIZAR
      		  <h5 class="modal-title" class="" id="exampleModalLabel"></h5>
      	</font>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{ action('EmployeeController@update', 'test') }}" method="post">
    	{{ method_field('patch') }}
    	{{ csrf_field() }}
      <div class="modal-body">
      		<input type="hidden" name="user_id" id="us_id">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nombre</label>
		    <input type="text" class="form-control" name="name" id="name"  aria-describedby="emailHelp" placeholder="Registra tu nombre">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Apellido</label>
		    <input type="text" class="form-control" name="lname" id="lname"  aria-describedby="emailHelp" placeholder="Ej. Peréz">
		  </div>

		 
		  <div class="col-md-6 ml-auto">
		    <label for="exampleInputEmail1">Numero de telefono</label>
		    <input type="number" class="form-control" name="number" id="number" aria-describedby="emailHelp" placeholder="Ej. 71260809">
		  </div>

		  <div class="col-md-6 ml-auto">
		    <label for="exampleInputPassword1">Correo</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico">
		  </div>
		
<br>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Dirección</label>
		    <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" placeholder="Ej. Av. 6 de Marzo N° 100">
		  </div>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
      </div> 
    </form>
    </div>
  </div>
</div>
<!-- Modal Delete-->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="background-color: lime;">
        <h5 class="modal-title text-center" class="" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{ action('EmployeeController@destroy', 'test') }}" method="post">
    	{{ method_field('delete') }}
    	{{ csrf_field() }}
      <div class="modal-body">
<p class="text-center">¿Esta seguro de eliminar?</p>
      		<input type="hidden" name="user_id" id="us_id" value="">  
	  </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-warning">Si, Eliminar</button>
      </div>
    </form>
    </div>
  </div>
</div>
	<table class="table display AllDataTables" id="datatable">
		<thead>
			<tr>	
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Rol</th>
				<th>Dirección</th>
            	<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
            	<td>{{ $user->name }}</td>
            	<td>{{ $user->lname }}</td>
            	<td>{{ $user->number }}</td>
            	<td>{{ $user->email }}</td>
            	<td>{{ $user->role }}</td>
            	<td>{{ $user->address }}</td>
				<td>
					<a href="" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" 
					data-myname="{{ $user->name }}" 
					data-mylname="{{ $user->lname}}" 
					data-mynumber="{{ $user->number }}"
					data-myemail="{{ $user->email }}"
					data-myaddress="{{ $user->address }}"
					data-usid="{{ $user->id }}" data-toggle="modal" data-target="#edit"></a>

					<a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash" data-usid="{{ $user->id }}"data-toggle="modal" data-target="#delete"></a>

					
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>
@endsection