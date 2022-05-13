<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ URL::asset('css/style-starter.css'); }}">
  
</head>
<body>
 
 <!-- Contenedor para alojar formulario de registro -->
  <div class="container-register">
      @if(isset(Auth::user()->email))
        <script>window.location="/login/successlogin"</script>
      @endif
    <div class="title-register">
        <h3 class="txt_reg">Iniciar sesion</h3>
    </div>
    <div class="form-container">
        
        <form class="form-register"  method="post" action="{{ url('/login/checklogin')}}">
            {{csrf_field()}}
            <div class="input-register">
                
                <label for="email" ><p class="txt_reg">Correo</p></label>
                <input type="email" id="email" name="email" placeholder="Correo" required><br>
                <label for="password"><p class="txt_reg">Contraseña</p></label>
                <input type="password" id="password" placeholder="Contraseña" required><br>
                <input type="submit" name="login" >
            </div>
            <div class="container-signin">
                <p class="txt_alt">No tiene cuenta? <a class="txt_reg" href="register.html">Registrarse</a></p>
                <p><a class="txt_reg" href="{{url('index')}}">Volver</a></p>
            </div>
        </form>
    </div>
  </div>
</body>
</html>