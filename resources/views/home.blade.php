<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Sistema de Reservas')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>EF</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Salon</b>EventoFantasia</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">N</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
   
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs" style="font-size: 25px;">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </li>
            
             
            <button class="btn btn-primary form-control" href="{{ route('logout') }}"  
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">Salir</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                </form>
             
            </ul>
          </li>
          

          
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar" style="background: rgba(0,0,0,1.9);">
   
    <section class="sidebar">
      
      <ul class="sidebar-menu" data-widget="tree">
         <li class="treeview">
          <a href="#">
             <i class="fa fa-dashboard"></i> <span>Inicio</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-dashboard"></i> <span>Reservas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <span class="label label-primary pull-right">3</span>
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Atencion</a></li><span class="label label-success pull-right">4</span>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Total</a>
          </ul>
        </li>
   {{-- @if (auth()->user()->role == 0) --}}
        <li class="treeview">
         <a href="#">
            <i class="fa fa-dashboard"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            {{-- @endif --}}
          <ul class="treeview-menu">
            <li><a href="{{ url('client') }}"><i class="fa fa-circle-o"></i> Clientes</a></li>

            
            <li ><a href="{{ url('employee') }}"><i class="fa fa-circle-o"></i> Empleados</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Recuperar Personal</a></li>
          </ul>
        </li>
      
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('tipos') }}"><i class="fa fa-circle-o"></i> Tipos de Eventos</a></li>
            <li><a href="{{ url('promociones')}}"><i class="fa fa-circle-o"></i> Promociones</a></li>
     
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> en proceso</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> en proceso</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
        @yield('content') 
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/dataTables.js"></script>
<script>
  
  $('#edit').on('show.bs.modal', function (event) {
        
  var button = $(event.relatedTarget) // Button that triggered the modal
  var name = button.data('myname') 
  var lname = button.data('mylname') 
  var number = button.data('mynumber') 
  var email = button.data('myemail') 
  var address = button.data('myaddress') 
  var user_id = button.data('usid') 

  var modal = $(this)
  modal.find('.modal-body #name').val(name);
  modal.find('.modal-body #lname').val(lname);
  modal.find('.modal-body #number').val(number);
  modal.find('.modal-body #email').val(email);
  modal.find('.modal-body #address').val(address);
  modal.find('.modal-body #us_id').val(user_id);

})
    $('#delete').on('show.bs.modal', function (event) {
        
  var button = $(event.relatedTarget) // Button that triggered the modal
  var user_id = button.data('usid') 
  
  var modal = $(this)

  modal.find('.modal-body #us_id').val(user_id);

})
</script>

<script type="text/javascript">
    $(document).ready(function () {
      var table = $('#datatable').DataTable();
      
      //start edit record
      table.on('click', '.edit', function () {
        $tr = $(this).closest('tr');
        if($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);

        $('#nombre').val(data[1]);
        $('#costo').val(data[2]);
        $('#descripcion').val(data[3]);

        $('#editForm').attr('action','/tipos/'+data[0]);
        $('#editModal').modal('show');
      });
      //end edit record

      //start delete record
      table.on('click', '.delete', function () {
        $tr = $(this).closest('tr');
        if($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);

        $('#deleteForm').attr('action','/tipos/'+data[0]);
        $('#deleteModal').modal('show');
      });
      //end delete record
    })
  </script>
</body>
</html>
