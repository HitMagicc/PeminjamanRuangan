<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" /> --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Register</title>
</head>
<body class="login-blade">
    <div class="background">
        <div class="login-container d-flex">
            <form action="{{route('sign-up')}}" method="POST" class="login-form me-4" >
                @csrf
                <img src="{{asset('assets/img/login.svg')}}" alt="" class="foto-login">
                <div class="form-group">
                    <label for="username">Masukkan nama anda</label>
                    <input type="username" id="username" name="username" placeholder="masukkan nama anda" required>
                </div>
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" id="nama" name="nama" placeholder="masukkan username anda" required>
                </div>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" placeholder="Masukkan Password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" placeholder="Masukkan kembali password anda" id="confirm_password" required>
                    <h6><a href="{{route('index.login')}}">sudah ada akun? klik di sini</a></h6>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="vl-register mx-4"></div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('assets/img/tes.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{asset('assets/img/tes2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('assets/img/tes3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</body>
<script>
    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>

</html>