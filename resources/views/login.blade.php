<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
            <p>{{ $err }}</p>
        @endforeach
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif

<div class="container right-panel-active">
    <!-- Sign Up -->
    <div class="container__form container--signup">
        <form action="{{ route('userRegister') }}" method="POST" class="form" id="form1">
            @csrf
            <h2 class="form__title">Sign Up</h2>
            <input type="text" placeholder="User" name="name" class="input" />
            <input type="email" placeholder="Email" name="email" class="input" />
            <input type="password" placeholder="Password" name="password" class="input" />
            <button type="submit" class="btn" name="submit">Sign Up</button>
        </form>
    </div>

    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="{{ route('login') }}" class="form" id="form2" method="POST">
            @csrf
            <h2 class="form__title">Sign In</h2>
            <input type="email" placeholder="Email" name="email" class="input" />
            <input type="password" placeholder="Password" name="password" class="input" />
            <a href="#" class="link">Forgot your password?</a>
            <button class="btn" type="submit">Sign In</button>
        </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">Sign In</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button type="submit" class="btn" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

  

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        fistForm.addEventListener("submit", () => {});
        secondForm.addEventListener("submit", () =>{} );
    </script>

   

</body>

</html>
