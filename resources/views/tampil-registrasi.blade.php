<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/style/style.css') }}" />
    <title>Halaman Registrasi</title>
</head>

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img
                src="assets/img/registrasi.jpg"
                class="img-fluid"
                alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="{{url('registrasi-user')}}" method="post">
                    @csrf
                        <h1 class="h3 mb-3 fw-normal">Register</h1>
                        <div class="form-floating">
                            <input
                            type="text"
                            name="name"
                            class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama') }}"
                            id="floatingInput"
                            placeholder="Nama" >
                            <label for="floatingInput">Nama</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="text"
                            name="username"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username') }}"
                            id="floatingInput"
                            placeholder="Username">
                            <label for="floatingInput">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}"
                            id="floatingInput"
                            placeholder="Email Address">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"  value="{{ old('password') }}"
                            id="floatingPassword"
                            placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input
                            type="password"
                            name="konfirmasi_password"
                            class="form-control @error('konfirmasi_password') is-invalid @enderror"  value="{{ old('konfirmasi_password') }}"
                            id="floatingPassword"
                            placeholder="Password">
                            <label for="floatingPassword">Konfirmasi Password</label>
                            @error('konfirmasi_password')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    </form>
                    <p>Sudah Punya Akun?</p>
                    <a class="w-100 btn btn-lg btn-success" href="{{ url('/') }}">Login</a>
            </div>
    </div>
</section>
</body>
</html>
