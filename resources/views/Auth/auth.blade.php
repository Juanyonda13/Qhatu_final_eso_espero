
<head>

  <link rel="stylesheet" href="../css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="z-index">
    @include('sweetalert::alert')
  </div>

  <div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{route('/registerStore')}}" method="POST">
          @csrf
            <h1>Crear cuenta</h1>

            <input type="text" placeholder="Nombre" name="name"/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>nombre requqerido</strong>
            </span>
            @enderror
            <input type="email" placeholder="Email" name="email" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>nombre requqerido</strong>
            </span>
            @enderror
            <input type="password" placeholder="Contraseña" name="password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>nombre requqerido</strong>
            </span>
            @enderror
            <button type="submit">Registrar</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{ route('/login')}}" method="POST">
            @csrf
            <h1>Iniciar sesion</h1>

            <input type="email" placeholder="Email" name="email" />

            <input type="password" placeholder="Contraseña"  name="password"/>


            <button type="submit">Iniciar</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Ya tienes una cuenta?</h1>
                <p>entra a qui para iniciar sesion a tu cuenta</p>
                <button class="ghost" id="signIn">Iniciar</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hola amigo!</h1>
                <p>presiona a qui si no tienes cuenta</p>
                <button class="ghost" id="signUp">Registrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>

</body>
