 <!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="#" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <a href="/">
                <img src="#" alt="logo"></a>
              </div>
              <h4>Registrate es gratis!!!</h4>
              <h6 class="font-weight-light">Al registrarte podras hacer reservas de nuestras instalaciones</h6>
              
              <form class="pt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label>Nombre</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        
                      </span>
                    </div>
                    <input id="name" type="text" class="form-control form-control-lg border-left-0" placeholder="Ej. Juan" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                  </div>
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        
                      </span>
                    </div>
                    <input id="lname" type="text" class="form-control form-control-lg border-left-0" placeholder="Ej. Peréz" name="lname" required autofocus>
                  </div>
                </div>
                    <div class="form-group">
                  <label>Número de referencia</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        
                      </span>
                    </div>
                    <input id="number" type="number" class="form-control form-control-lg border-left-0" placeholder="Ej. 60597009" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="number" value="{{ old('name') }}" required autofocus>
                   
                  </div>

                </div>
               
                <div class="form-group">
                  <label>Correo Electronico</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        
                      </span>
                    </div>
                    <input id="email" type="email" class="form-control form-control-lg border-left-0" placeholder="Ej. williams@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                 </div>
                </div>

            

                <div class="form-group">
                  <label>Contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                   
                      </span>
                    </div>
                    <input id="password" type="password" class="form-control form-control-lg border-left-0"  placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >    
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                     
                  </div>
                </div>

                <input type="hidden" id="address" name="address" value="unnecessary">

                <div class="form-group">
                  <label>Confirmar contraseña</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        
                      </span>
                    </div>
                    <input id="password-confirm" type="password" class="form-control form-control-lg border-left-0" name="password_confirmation" placeholder="ConfirmPassword" >                   
                  </div>
                </div>

             
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Registrarse</button>
                </div>

               

              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  Todos los derechos reservados</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="js/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
