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
    @if(isset(Auth::user()->email))
        <script>window.location="/inicio/successlogin"</script>
    @endif
 <!-- Contenedor para alojar formulario de registro -->
  <div class="container-register">
    <div class="title-register">
        <h3 class="txt_reg">Registro</h3>
    </div>
    <div class="form-container">
        <form class="form-register" method="POST" action="{{url('register/check')}}">
        {{csrf_field()}}
            <div class="input-register">
                <label for="fname"><p class="txt_reg" >Nombre</p></label>
                <input type="text" id="fname" name="name" placeholder="Nombre" required ><br>
                <label for="email"><p class="txt_reg">Correo</p></label>
                <input type="email" id="email" name="email" placeholder="Correo" required><br>
                <label for="password"><p class="txt_reg">Contraseña</p></label>
                <input type="password" name="password" placeholder="Contraseña" required><br>
                <input type="submit">
            </div>
            <div class="container-signin">
                <p class="txt_alt">Ya está registrado? <a class="txt_reg" href="inicio">Iniciar sesión</a></p>
                <p><a class="txt_reg" href="index.html">Volver</a></p>
            </div>
        </form>
    </div>
  </div>
  
</body>
</html>